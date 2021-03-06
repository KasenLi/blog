<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('admin.welcome.index')}}"><img src="{{ asset('images/logo/logo.gif')}}" class="navbar-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if(Auth::user())
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.welcome.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::user()->type == "admin")
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index') }}">{{trans('app.navbar_users')}}</a>
        </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index')}}">{{trans('app.navbar_categories')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index')}}">{{trans('app.navbar_articles')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.images.index')}}">{{trans('app.navbar_images')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tags.index') }}">Tags</a>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a href="{{route('front.index')}}" class="nav-link active">{{trans('app.navbar_main_page')}}</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">{{ Auth::user()->name }} <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="{{ route('admin.auth.logout')}}" class="dropdown-item">{{trans('app.navbar_logout')}}</a>
        </div>
      </li>
    </ul>
    @endif
    @if(!Auth::User())
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.welcome.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.auth.login') }}">{{trans('app.navbar_login')}}</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.auth.register') }}">{{trans('app.navbar_register')}}</a>
      </li>
    </ul>
    @endif
  </div>
</nav>