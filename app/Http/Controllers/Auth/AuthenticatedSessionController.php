<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.SignIn');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();

        $userId = auth()->user()->id;

        $roleId = DB::table('model_has_roles')
            ->where('model_id', $userId)
            ->where('model_type', 'App\Models\User')
            ->value('role_id');

        // dd($roleId);
        $roleName = Role::find($roleId)->name;
        if ($roleName == 'user') {
            return redirect(RouteServiceProvider::ALERNATIVE);
        }
        // dd($roleName);

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
