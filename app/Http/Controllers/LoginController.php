<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(Request $datos){
        $usuario['nombre'] = ucfirst(strtolower( $datos->get('nombre') ));
        User::create($datos->all());

        return redirect('/login');
    }
}
