<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{URL::asset('Logo/logo.jpg')}}" type="image/jpg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">       
    
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  

    <style>
        h1,h2,h3,.nav-link,.font-anton{
            font-family: 'Anton', sans-serif;
        }
        p,ul,li{font-family: 'Nunito', sans-serif;}
        .navbar-light .navbar-nav .nav-link  {color:white !important}
        .bg-danger{ background:#990000 !important}
        .text-blue{ color:#2986cc !important}
        .text-danger{ color:#FF4000 !important}
        .text-white { color:#f3f6f4 !important}
        .text-warning{ color:#FFC926 !important}
        .bg-warning{ background:#FFC926 !important}
    </style>

</head>

<body class="bg-danger">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="nav-item nav-link" href="http://80.209.228.198/ojs/index.php/FIDOE/login?source=%2Fojs%2Findex.php%2FFIDOE">
        <img src={{URL::asset('Fotos/LogoREDSolo.jpg')}}  class="card-img-top">
     </a>
       <a class="nav-item nav-link" href="/">
            <img href="/" src={{URL::asset('Logo/logo_itcj.png')}} class="card-img-top">
        </a>
        <a class="navbar-brand" href="/">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="/nosotros">Nosotros</a>
            <a class="nav-item nav-link" href="/contacto">Contacto</a>
            <a class="nav-item nav-link" href="/proyectosV">Proyectos</a>
          </div>
        </div>
      </nav>

        @yield('content')
</body>
<div>
  <img width=100% src={{URL::asset('Logo/logos.png')}}>
</div>
</html>