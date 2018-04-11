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
          <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
        </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index')}}">Categorías</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index')}}">Artículos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.images.index')}}">Imágenes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tags.index') }}">Tags</a>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a href="{{route('front.index')}}" class="nav-link active" target="_blank">Página principal</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">{{ Auth::user()->name }} <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="{{ route('admin.auth.logout')}}" class="dropdown-item">Salir</a>
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
        <a class="nav-link" href="{{ route('admin.auth.login') }}">Entrar</a>
      </li>
    </ul>
    @endif
  </div>
</nav>