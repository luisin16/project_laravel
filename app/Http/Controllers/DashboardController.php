<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all(); 

        return view('layouts.dashboard', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado.'], 404);
        }

        try {
            $user->delete();
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Hubo un error al eliminar el usuario.'], 500);
        }
        
    }

    public function edit($id)
{
    $user = User::find($id);
    
    if (!$user) {
        return response()->json(['message' => 'Usuario no encontrado.'], 404);
    }

    return view('layouts.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
       
    ]);

    $user = User::find($id);
    
    if (!$user) {
        return response()->json(['message' => 'Usuario no encontrado.'], 404);
    }

    $user->name = $request->input('name');
    $user->email = $request->input('email');

    $user->save();

    return redirect()->route('dashboard')->with('success', 'Usuario actualizado correctamente.');
}

}

