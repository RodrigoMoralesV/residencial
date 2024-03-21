<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();

        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Usuarios.new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $datos)
    {
        // dd($request->all());
        $validador = Validator::make($datos->all(), [
            "nombre" => "required|max:100",
            "email" => "required|unique:usuarios|max:100",
            "password" => "required|max:100",
            "foto" => "mimes:jpeg,jpg,png"
          ]);
      
          if ($validador->fails()) {
            return back()->withErrors($validador);
          }
      
          $nombre = $datos;
      
          $datos['nombre'] = ucwords(strtolower($datos->get('nombre')));
      
          $datos['email'] = strtolower($datos->get('email'));
      
          if (isset($datos['foto'])) {
            $foto = time().".".$nombre['foto']->extension();
      
            $datos->foto->move(public_path("dist/img"), $foto);
          } else{
            $foto = null;
          }
      
          $datos = Usuario::create([
            'nombre' => $datos['nombre'],
            'email' => $datos['email'],
            'password' => $datos['password'],
            'foto' => $foto,
          ]);
      
          return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::find($id);

        return view("usuarios.edit",compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $datos, Usuario $usuario)
    {
        $validador = Validator::make($datos->all(), [
            "nombre" => "required|max:100",
            "email" => "required|max:100",
            "password" => "required|max:100",
            "foto" => "mimes:jpeg,jpg,png"
          ]);
      
          if ($validador->fails()) {
            return back()->withErrors($validador);
          }
      
          $nombre = $datos;
      
          $datos['nombre'] = ucwords(strtolower($datos->get('nombre')));
      
          $datos['email'] = strtolower($datos->get('email'));
      
          if (isset($datos['foto'])) {
            $foto = time().".".$nombre['foto']->extension();
      
            $datos->foto->move(public_path("dist/img"), $foto);
          } else{
            $foto = null;
          }
      
          $datos = $usuario->update([
            'nombre' => $datos['nombre'],
            'email' => $datos['email'],
            'password' => $datos['password'],
            'foto' => $foto,
          ]);
      
          return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
    
        if($usuario->estado == 1){
          $usuario->where('id', $id)->update(['estado' => 0]);
        } 
        else{
          $usuario->where('id', $id)->update(['estado' => 1]); 
        }
    
        return redirect('usuarios');
    }
}
