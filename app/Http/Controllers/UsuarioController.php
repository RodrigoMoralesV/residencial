<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view("Usuario.new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        Usuario::create($datos);

        return redirect('viviendas');
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
        $usuarios = Usuario::find($id);

        return view("usuarios.edit",compact('usuarios'));
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

        usuario->update($datos);

        return redirect('viviendas');
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
