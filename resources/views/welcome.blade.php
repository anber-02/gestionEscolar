<!-- PRUEBAS DE LAYOUTS CON HERENCIA -->
<!-- @ extends('layouts.app') -->
<!-- Indicamos que extiende de una plantilla -->
<!-- @ section('title', 'Home') -->
<!-- El segundo parametro es solo texto por
eso lo podemos agregar como segundo parametro -->

<!-- @ section('content') -->
<!-- Indicamos el contenido que se tiene
que mostrar en la plantilla principal que es 
de la que extendemos-->
<!-- <h1>Welcome</h1> -->
<!-- @ endsection -->
<!-- ==============FIN DEL LAYOUT CON HERENCIAS======= -->

<!-- PRUEBA DE LAYOUTS CON COMPONENTES -->
<x-layouts.app 
 title="Home" 
 meta-description="Home description"
 :sum="2 + 1"
>
<!-- los dos puntos antes de la propiedad sum indica, que ejecute php -->
    <!-- Opcion cuando queramos escribir html -->
    <!-- <x-slot name="title">Home</x-slot> -->
    <h1>HOME</h1>
    {{-- @dump($posts) --}}
    <!-- @ dump($variable a inspeccionar) -->
    <!-- directiva para inspeccionar datos -->
    @foreach($posts as $post)
    <p>{{$post['title']}}</p>
    <!-- acceder a propiedades $posts -> title -->
    @endforeach

    <h1 class="text-3xl text-blue-500 font-bold underline">
    Hello world!
  </h1>

</x-layout.app>