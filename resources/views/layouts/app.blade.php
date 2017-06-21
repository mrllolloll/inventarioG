<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



   <link rel="stylesheet" type="text/css" href="/css/roboto.css">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

      <!-- Bootstrap Material Design -->
      <link href="/css/bootstrap-material-design.css" rel="stylesheet">
      <link href="/css/ripples.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>



</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top navbar-margen" id="nav">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}" id="brand1">
                        <img alt="" src="{{url('css/seniat.png')}}" class="logo" id="brand2"/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" id="pos-brand">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li  ><a href="{{ url('/login') }}"  id="login" class="login">Login</a></li>
                        @else
                            <li class="dropdown login">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="login" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu"  id="fondoLog">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Scripts -->
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/ripples.min.js"></script>
        <script src="/js/material.min.js"></script>
        <script>
          $(function () {
            $.material.init();
            $(".shor").noUiSlider({
              start: 40,
              connect: "lower",
              range: {
                min: 0,
                max: 100
              }
            });

            $(".svert").noUiSlider({
              orientation: "vertical",
              start: 40,
              connect: "lower",
              range: {
                min: 0,
                max: 100
              }
            });
          });
        </script>
        @yield('content')
    </div>

    @include('layouts.datespicker')

</body>
</html>
