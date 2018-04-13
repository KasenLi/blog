<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['cors'])->group(function(){
	Route::get('/',[
		'as' => 'front.index',
		'uses' => 'FrontController@index' 
	]);

	Route::get('categories/{name}',[
		'uses'	=> 'FrontController@searchCategory',
		'as'	=> 'front.search.category'
	]);

	Route::get('tags/{name}',[
		'uses'	=> 'FrontController@searchTag',
		'as'	=> 'front.search.tag'
	]);

	Route::get('articles/{slug}',[
		'uses'	=> 'FrontController@viewArticle',
		'as'	=> 'front.view.article'
	]);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','cors'] ], function(){

	Route::get('/',[
		'uses' 	=> 'MainController@index',
		'as'	=> 'admin.welcome.index'
	]);
	Route::group(['middleware' => 'admin'], function(){
		Route::resource('users','UsersController');
		Route::get('users/{id}/destroy', [
			'uses' => 'UsersController@destroy',
			'as'   => 'admin.users.destroy'
		]);
	});
	

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses'	=> 'CategoriesController@destroy',
		'as'	=> 'admin.categories.destroy'
	]);
	Route::resource('tags', 'TagsController');
	
	Route::get('tags/{id}/destroy', [
		'uses'	=> 'TagsController@destroy',
		'as'	=> 'admin.tags.destroy'
	]);

	Route::resource('articles', 'ArticlesController');
	Route::get('articles/{id}/destroy', [
		'uses'	=> 'ArticlesController@destroy',
		'as'	=> 'admin.articles.destroy'
	]);

	Route::get('images', [
		'uses' => 'ImagesController@index',
		'as'   => 'admin.images.index'
	]);

});
/*
Auth::routes();
*/
Route::get('admin/auth/login', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'admin.auth.logout'
]);

Route::get('admin/auth/register',[
	'uses'	=>	'Auth\RegisterController@showRegisterForm',
	'as'	=>	'admin.auth.register'
]);

Route::post('admin/auth/register', [
	'uses'	=>	'Auth\RegisterController@register',
	'as'	=>	'admin.auth.register'
]);

Route::get('/home', 'HomeController@index')->name('home');
