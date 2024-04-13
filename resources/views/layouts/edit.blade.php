@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
<div class="container mx-auto my-8 px-4">
    <h1 class="text-3xl font-bold mb-4">Editar Usuario</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold mb-1">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="border border-gray-200 rounded-md p-2 w-full">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold mb-1">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" class="border border-gray-200 rounded-md p-2 w-full">
        </div>
        
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Actualizar</button>
    </form>
</div>
@endsection