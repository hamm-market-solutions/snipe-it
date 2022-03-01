<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Empfangsbestätigung</title>
    <link rel="stylesheet" href="{{ url(mix('css/dist/all.css')) }}">
  </head>
<body>
    @yield('content')
</body>
</html>
