<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class LoginController extends Controller
{
  public function register(Request $datos)
  {
    $validador = Validator::make($datos->all(), [
      "nombre" => "required|max:100",
      "email" => "required|unique:usuarios|max:100",
      "password" => "required|max:100",
      "foto" => "mimes:jpeg,jpg,png"
    ]);

    if ($validador->fails()) {
      return back()->withErrors([
        'foto' => 'El tipo de archivo no es valido.'
      ]);
    }

    $nombre = $datos;

    $datos['nombre'] = ucwords(strtolower($datos->get('nombre')));

    $datos['email'] = strtolower($datos->get('email'));

    if (isset($datos['foto'])) {
      $foto = time().".".$nombre['foto']->extension();

      $datos->foto->move(public_path("dist/img"), $foto);
    }

    $datos = User::create([
      'nombre' => $datos['nombre'],
      'email' => $datos['email'],
      'password' => $datos['password'],
      'foto' => $foto,
    ]);

    return redirect('/login');
  }

  public function check(Request $datos)
  {

    if (Auth::attempt($datos->except('_token'))) {
      $datos->session()->regenerate();

      return redirect()->intended('home');
    }

    return back()->withErrors([
      'email' => 'El email no se encuentra registrado.'
    ])->onlyInput('email');
  }
}
