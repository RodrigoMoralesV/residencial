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
        $tipos_vivienda = Tipos_vivienda::all();

        return view('tipos_viviendas.index',compact('tipos_vivienda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos_vivienda = Tipos_vivienda::all();
        return view("tipos_viviendas.new",compact('tipos_vivienda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(),['nombre'=>'required|max:50','estado'=>'required',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();

        Tipos_vivienda::create($datos);

        return redirect('tipos_viviendas');
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
    public function edit(string $id)
    {
        $tipos_vivienda = Tipos_vivienda::find($id);

        return view("Tipos_viviendas.edit",compact('tipos_vivienda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipos_vivienda $tipos_vivienda)
    {
        $validador = Validator::make($request->all(),['nombre'=>'required|max:50','estado'=>'required',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();

        $tipos_vivienda->update($datos);

        return redirect('tipos_viviendas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipo = Tipos_vivienda::find($id);
    
        if($tipo->estado == 1){
          $tipo->where('id', $id)->update(['estado' => 0]);
        } 
        else{
          $tipo->where('id', $id)->update(['estado' => 1]); 
        }
    
        return redirect ('tipos_viviendas');
    }
}
