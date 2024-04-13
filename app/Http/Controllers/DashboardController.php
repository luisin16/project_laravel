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
}

