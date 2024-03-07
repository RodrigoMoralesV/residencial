<?php

namespace App\Http\Controllers;

use App\Models\Tipos_vivienda;
use Illuminate\Http\Request;

class TiposViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_viviendas = Tipos_vivienda::where('estado',1)->get();
        return view('tipos_viviendas.index',compact('tipos_viviendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipos_vivienda $tipos_vivienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipos_vivienda $tipos_vivienda)
    {
        //
    }
}
