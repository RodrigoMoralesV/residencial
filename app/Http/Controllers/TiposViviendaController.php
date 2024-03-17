<?php

namespace App\Http\Controllers;

use App\Models\Tipos_vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TiposViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_vivienda = Tipos_vivienda::where('estado',1)->get();
        return view('tipos_viviendas.index',compact('tipos_vivienda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos_vivienda = Tipos_vivienda::all();
        return view("tipos_vivienda.new",compact('tipos_vivienda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(),['nombre'=>'required|max:20','bloque_id'=>'required',
        'estado'=>'required',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();
        Tipos_vivienda::create($datos);

        return redirect('viviendas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipos_vivienda $tipos_vivienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipos_vivienda $tipos_vivienda)
    {
        $tipos_vivienda = Tipos_vivienda::all();
        return view("Tipos_vivienda.edit",compact('tipos_vivienda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipos_vivienda $tipo_vivienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipos_vivienda $tipo_vivienda)
    {
        //
    }
}
