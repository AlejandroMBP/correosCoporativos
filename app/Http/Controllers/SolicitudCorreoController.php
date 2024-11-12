<?php

namespace App\Http\Controllers;

use App\Mail\CorreoCorporativo;
use App\Models\Role;
use App\Models\User;
use App\Models\CorreoCorporativo as corporativo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;

class SolicitudCorreoController extends Controller
{
    public function index()
    {
        $usuarios = User::whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->get();

        return view('DashboardPages.solicitudes.index', compact('usuarios'));
    }
    public function envio(Request $request)
    {

        //dd($request->all());
        // $usuario = $request->input('username');

        $nombre = strtoupper($request->input('nombre'));
        $id = decrypt($request->input('id'));
        // dd($id);
        $correoCorporativo = $request->input('emailCorporativo');
        $carnet = $request->input('carnet');
        $emailDestino = $request->input('email');
        $year = Carbon::now()->year;
        $password = $carnet . '+' . 'Utic' . $year;


        Mail::to($emailDestino)->send(new CorreoCorporativo($nombre, $correoCorporativo, $password));

        corporativo::create([
            'user_id' => $id,
            'emailCorporativo' => $correoCorporativo,
        ]);
        return Redirect()->back()->with('success', 'Correo enviado correctamente');
    }
}
