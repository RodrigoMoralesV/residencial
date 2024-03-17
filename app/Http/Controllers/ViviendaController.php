<?php

namespace App\Http\Controllers;

use App\Models\Vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viviendas = Vivienda::all();
        return view("viviendas.index", compact("viviendas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viviendas = vivienda::all();
        return view("viviendas.new",compact('viviendas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(),['nomenclatura'=>'required|max:20','bloque_id'=>'required','estado'=>'required','telefono'=>'required|max:20',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();
        Vivienda::create($datos);

        return redirect('viviendas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vivienda $vivienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vivienda $vivienda)
    {
        $bloques = vivienda::all();
        return view("viviendas.edit",compact('bloques'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vivienda $vivienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vivienda $vivienda)
    {
        //
    }
}
