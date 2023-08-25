<!DOCTYPE html>
<html lang="en" class="bg-teal-200">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'default meta description' }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-pattern min-h-screen relative">    
    
    <x-messages.status-messages />
    <!-- Se muestra el mensaje en todo el layout debajo de la navegacion -->
    @if (session('status'))
        <!-- verifica si existe un mensaje de sesion con la clave status -->
        <div class="status">
            {{ session('status') }}
        </div>
    @endif
    {{ $slot }}
    <!-- slot es una variable definida que indica
donde se va colocar el html dinamico -->
</body>

</html>
