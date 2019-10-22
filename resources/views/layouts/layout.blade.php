<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.translate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/translatejs.jquery.json') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/diccionario.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <title>MaxCenter</title>
  </head>
  <body>
    <!-- Incluimos el header -->
    @include('header')
    <!-- Incluimos las vistas aquí -->
    @yield('content')
    <!-- Incluimos el footer -->
    @include('footer')
  </body>
</html>
