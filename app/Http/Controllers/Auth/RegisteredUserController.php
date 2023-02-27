<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // Rules\Password::defaults() para que sea mas segura
            // confirmed -> busca un input con el mismo nombres seguido
            // de un _ con la palabra confirmation
            // password_confirmation
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // bcrypt funcion para encriptar contraseñas
        ]);

        return to_route('login')
            ->with('status', 'Account created!');
    }
    
}
