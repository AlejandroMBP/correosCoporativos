<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registro');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            // 'username' => ['required', 'string', 'max:255', 'unique:users'],
            // 'first_name' => ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'email' => 'required|email|unique:users,email',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'Carnet' => 'required|unique:users,carnet',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'Celular' => 'required|numeric',
            'fechaNacimiento' => 'required|date',
        ]);
        $year = Carbon::now()->year;
        $password = $request->Carnet . '+' . 'Utic' . $year;

        // $user = User::create([
        //     'username' => $request->username,
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
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

        $user->assignRole('user');
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::ALERNATIVE);
    }
}
