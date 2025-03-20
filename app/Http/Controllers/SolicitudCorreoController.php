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
use Illuminate\Support\Facades\Validator;

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
        $validator = $request->validate([
            'emailCorporativo' => 'required|email|unique:correo_corporativo,emailCorporativo'
        ], [
            'emailCorporativo.required' => 'El correo corporativo es obligatorio.',
            'emailCorporativo.email' => 'El correo corporativo debe tener un formato válido.',
            'emailCorporativo.unique' => 'Este correo corporativo ya está registrado.',
        ]);
        $nombre = strtoupper($request->input('nombre'));
        $id = decrypt($request->input('id'));
        $correoExistente = corporativo::where('user_id', $id)->exists();
        if ($correoExistente) {
            return redirect()->back()->withErrors(['emailCorporativo' => 'Este usuario ya cuenta con un correo corporativo'])->withInput();
        }
        try {
            // dd($id);
            $correoCorporativo = $request->input('emailCorporativo');
            $carnet = $request->input('carnet');
            $emailDestino = $request->input('email');
            $year = Carbon::now()->year;
            $password = $carnet . '+' . 'Utic' . $year;


            //Mail::to($emailDestino)->send(new CorreoCorporativo($nombre, $correoCorporativo, $password));

            corporativo::create([
                'user_id' => $id,
                'emailCorporativo' => $correoCorporativo,
            ]);
            // return Redirect()->back()->with('success', 'Correo enviado correctamente');
            return Redirect()->back()->with('success', 'Correo enviado correctamente');
        } catch (\Exception $e) {
            return Redirect()->back()->withErrors('errors', 'Algo fallo intentelo mas tarde!')->withInput();
        }
    }
}
