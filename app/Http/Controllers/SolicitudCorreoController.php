<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class SolicitudCorreoController extends Controller
{
    public function index()
    {
        $usuarios = User::whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->get();

        return view('DashboardPages.solicitudes.index', compact('usuarios'));
    }
}
