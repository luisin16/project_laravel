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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
