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
        return view('auth.exitoso');
    }
    public function create()
    {
        return view('auth.solicitud');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'Carnet' => 'required|unique:users,carnet',
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'Celular' => 'required|numeric',
            'fechaNacimiento' => 'required|date',
        ]);
        $year = Carbon::now()->year;
        $password = $request->Carnet . '+' . 'Utic' . $year;

        $user = User::create([
            'username' => $request->Carnet,
            'carnet' => $request->Carnet,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'celular' => $request->Celular,
            'fechaNacimiento' => $request->fechaNacimiento,
            'password' => Hash::make($password),
        ]);

        event(new Registered($user)); // Esto envía el enlace de verificación

        $user->assignRole('user');

        return redirect()->route('solicitud.exitoso')->with('success', 'Registro realizado correctamente. Por favor, verifica tu correo electrónico.');
    }
}
