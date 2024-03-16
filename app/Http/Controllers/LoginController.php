<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function register(Request $datos){
        
        $datos['nombre'] = ucwords(strtolower( $datos->get('nombre') ));

        $datos['email'] = strtolower( $datos->get('email') );

        User::create($datos->all());

        return redirect('/login');
    }

    public function check(Request $datos){
         
        if (Auth::attempt($datos->except('_token'))) {
            $datos->session()->regenerate();

            return redirect()->intended('residentes');
        }

        return back()->withErrors([
            'email' => 'El email no se encuentra registrado.',
        ])->onlyInput('email');
    }
}
