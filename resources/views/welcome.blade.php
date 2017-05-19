<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Refresh" content="0;url={{url('/home')}}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Direccion de informatica</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
  html, body {
    background-color: #fff;

    font-weight: 100;
    height: 100vh;
    margin: 0;
  }

  body{
    background-position: 100% 100%;
    background-image: url(images/fodo.png);
    -webkit-background-size: 100% 70%; /* For WebKit*/
    -moz-background-size: 100% 70%;    /* Mozilla*/
    -o-background-size: 100% 70%;      /* Opera*/
    background-size: 100% 70%;         /* Generic*/
    background-repeat: no-repeat;
  }

  body .links :hover{
    filter: blur(1.8px);}


  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }

  .content {
    text-align: center;
  }

  .title {
    font-size: 84px;
  }

  .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }

  .m-b-md {
    margin-bottom: 30px;
  }
  </style>
</head>
<body id="show">

  <script type="text/javascript" src="js/app.js"></script>

  <script type="text/javascript">
    $("#lolol").mouseover(function() {
      alert("hola mundo");
    });
  </script>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links" id="lolol" onmouseover="alert("holamundo");">
      <a href="{{ url('/login') }}">Login</a>
    </div>
    @endif

    <div class="content">
      <div class="title m-b-md">
        Sistema de inventario
      </div>
      </div>
    </div>
  </body>
</html>
