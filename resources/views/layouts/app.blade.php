<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel App</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300">

<nav class="flex items-center justify-between py-4 px-8 bg-indigo-500 text-white">
    <div class="flex items-center">
        <h1 class="text-2xl font-bold mr-4">Plataforma en Laravel</h1>
        @if(auth()->check())
            <p class="text-xl">Bienvenido: <b>{{ auth()->user()->name }}</b></p>
        @endif
    </div>

    <ul class="flex items-center">
        @if(auth()->check())
            <li class="ml-8">
                <a href="{{ route('login.destroy') }}" class="font-bold border-2 border-white py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">
                    Cerrar Sesión
                </a>
            </li>
        @else
            <li>
                <a href="{{ route('login.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Iniciar Sesión</a>
            </li>
            <li>
                <a href="{{ route('registeruser.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Registrarse</a>
            </li>
        @endif
    </ul>
</nav>

@yield('content')

</body>
</html>
