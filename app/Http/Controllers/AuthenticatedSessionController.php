<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    //
    public function store(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'string','email'],
            'password' => ['required', 'string']
        ]);
        /**
         * va a verificar email y password 
         * con la de la base de datos
         * y devuelve un booleano, como segundo parametro
         * recibe un boolean para indicarle si 
         * queremos recordar la sesion o no
         * para eso utlizamos el checkbox de recuerdame
         */
        if(!Auth::attempt($credentials, $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        if(auth()->user()->role == 'admin'){
            // retornar a vista administrador
            return ;
        }

        $request->session()->regenerate();

        return redirect()->intended()
            ->with('status', 'Inicio de sesion correcto');
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')
                ->with('status', 'Cerrando sesion');
    }
}
