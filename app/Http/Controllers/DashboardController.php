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
}

