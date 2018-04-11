<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="{{ asset('images/logo/logo.gif')}}" class="navbar-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    {!! Form::open(['route' => 'front.index', 'method' => 'GET','class' => 'navbar-form  form-inline my-2 my-lg-0']) !!}
      <div class="input-group">
        {!! Form::text('title', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar artículo...', 'aria-describedby' => 'search']) !!}
        <div class="input-group-append">
          <button class="input-group-text" id="search" type="submit"><i class="fas fa-search"></i></button>
        </div>
        
      </div>
      
    {!! Form::close() !!}
    |
    <ul class="nav navbar-nav navbar-right">
      @if(!Auth::user())
      <li class="nav-item active">
        <a href="/admin/auth/login" class="nav-link">Entrar</a>
      </li>
      @endif
      @if(Auth::user())
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">{{ Auth::user()->name }} <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="{{ route('admin.auth.logout')}}" class="dropdown-item">Salir</a>
        </div>
      </li>
      @endif
    </ul>
  </div>
</nav>
