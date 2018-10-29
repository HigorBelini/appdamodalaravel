<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App da Moda - Página inicial</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/headline.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-real.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="icon" href="{{asset('img/logo6.png')}}" alt="App da moda - Logo-icone">
    </head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
      <a class="logo navbar-brand" href="/"></a>
        <a class="navbar-toggle" data-toggle="collapse"
        data-target="#navbarResponsive">
        <div class="icon">
            <div class="hamburguer"></div>
        </div>
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <br>
            <ul class="navbar-nav ml-auto">
              @guest
                <li class="nav-item">
                  <a href="{{ route('login') }}" class="btn btn-danger">{{ __('Fazer login') }}</a>
                  <a href="{{ route('register') }}" class="btn btn btn-primary"> {{ __('Faça seu cadastro') }}</a>
                </li>
              @else
                <li class="nav-item">
                  <a href="#">
                    <span class="hidden-xs" style="color:#000; font-size: 1.2em;">{{ Auth::user()->name }}</span></a>
                    <span style="color:#000; font-size: 1.2em;"> | </span>
                    <!--<a href="#" class="hidden-xs" style="color:#000; font-size: 1.2em;">Sair</a>-->
                    <a class="hidden-xs" style="color:#000; font-size: 1.2em;" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </a>
                </li>
                 @can('eAdmin')
                 <br>
                 <li>
                    <a  class="btn btn-danger" href="{{route('administrador')}}">Administração</a>
                 </li>
                    @endcan
              @endguest
            </ul>
        </div>
    </div>
</nav>

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/teste 1.jpeg">
          <div class="carousel-caption">
            <h1 class="display-2">Bootstrap</h1>
            <h3>Complete Website Layout</h3>
            <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
            <button type="button" class="btn btn-primary btn-lg">Get Started</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/teste 2.jpeg">
          <div class="carousel-caption">
            <h1 class="display-2">Bootstrap</h1>
            <h3>Complete Website Layout</h3>
            <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
            <button type="button" class="btn btn-primary btn-lg">Get Started</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/teste 3.jpeg">
          <div class="carousel-caption">
            <h1 class="display-2">Bootstrap</h1>
            <h3>Complete Website Layout</h3>
            <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
            <button type="button" class="btn btn-primary btn-lg">Get Started</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/teste 4.jpeg">
          <div class="carousel-caption">
            <h1 class="display-2">Bootstrap</h1>
            <h3>Complete Website Layout</h3>
            <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
            <button type="button" class="btn btn-primary btn-lg">Get Started</button>
          </div>
        </div>
      </div>
    </div>
    
</body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/animate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/bootstrap.hello.min.js')}}"></script>
    <script src="{{asset('js/styles.js')}}"></script>
</html>