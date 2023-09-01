@props(['route' => '', 'text' => ''])

<?php
  $routeBase = explode(".", $route)[0];
?>

  <a href="{{ route($route) }}"
      class="capitalize text-lg block py-2 px-2 border-4 border-transparent rounded hover:bg-gray-800 lg:hover:border-b-blue-700 {{request()->routeIs($routeBase . '.*') ? "text-white bg-blue-700 lg:bg-transparent lg:border-b-4 lg:border-b-blue-700 " : "text-gray-500"}}"
      aria-current="page">{{$text}}</a>