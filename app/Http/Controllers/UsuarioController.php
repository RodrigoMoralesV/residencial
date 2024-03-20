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
        $usuarios = Usuario::where('estado',1)->get();

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
    public function store(Request $request)
    {
        // dd($request->all());
        $validador = Validator::make($request->all(),[
            'nombre'=>'required|max:100',
            'email'=>'required|max:100',
            'password'=>'required|max:100',
            'estado'=>'required',]);

        if ($validador->fails()){
            return back();
        }

        $datos = $request->all();

        if (isset($datos['nombre'])) {
            $datos['nombre'] = ucwords(strtolower($datos['nombre']));
        }

        if (isset($datos['email'])) {
            $datos['email'] = strtolower($request->get('email'));
        }

        $datos['password'] = Hash::make('password');

        Usuario::create($datos);

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
    public function update(Request $request, Usuario $usuario)
    {
        $validador = Validator::make($request->all(),[
            'nombre'=>'required|max:100',
            'email'=>'required|max:100',
            'password'=>'required|max:100',
            'estado'=>'required',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();

        $datos['password'] = Hash::make('password');

        $usuario->update($datos);

        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Usuario::destroy($id);

        return redirect('usuarios');
    }
}
