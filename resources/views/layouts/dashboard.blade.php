@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto my-8 px-4">
    <h1 class="text-3xl font-bold mb-4">Lista de Usuarios</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-indigo-500 text-white">
                <tr>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">Acciones</th>
                    
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($users as $user)
                    <tr>
                        <td class="py-3 px-4">{{ $user->id }}</td>
                        <td class="py-3 px-4">{{ $user->name }}</td>
                        <td class="py-3 px-4">{{ $user->email }}</td>
                        <td class="py-3 px-4">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-600 text-white font-semibold px-4 rounded-md">Eliminar</button>
                        </form>
                        <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-600 hover:bg-blue-600 text-white font-semibold px-4 rounded-md ml-2">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="flex justify-end mt-4">
    <a href="{{ route('products.index') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-md">Subir Productos</a>
</div>

@endsection
