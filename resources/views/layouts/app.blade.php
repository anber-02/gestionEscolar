<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
</head>
<body class="bg-black-300">
  <!-- Navbar -->
  @include('partials.nav')
  
  <!-- Contenido -->
  <!-- Indicamos el contenido que va a ser dinamico -->
  @yield('content')
</body>
</html>