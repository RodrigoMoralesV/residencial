<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaqueteController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $paquetes = Paquete::where('estado', 1)->get();

    return view('paquetes.index', compact('paquetes'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $paquetes = Vivienda::all();

    return view("paquetes.new", compact('paquetes'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validador = Validator::make($request->all(), [
      'destinatario' => 'required|max:50',
      'vivienda_id' => 'required',
      'recibido_por' => 'required|max:50',
      'entregado_a' => 'required|max:50',
      'estado' => 'required',
    ]);

    if ($validador->fails()) {
      return back()->withErrors($validador)->withInput();
    }

    $datos = $request->all();
    
    Paquete::create($datos);

    return redirect('paquetes');
  }

  /**
   * Display the specified resource.
   */
  public function show(Paquete $Paquete)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $paquete = Paquete::find($id);

    $viviendas = Vivienda::where('estado', 1)->get();

    return view("paquetes.edit", compact('paquete', 'viviendas'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Paquete $Paquete)
  {
    $validador = Validator::make($request->all(), [
      'destinatario' => 'required|max:50',
      'vivienda_id' => 'required',
      'recibido_por' => 'required|max:50',
      'entregado_a' => 'required|max:50',
      'estado' => 'required',
    ]);

    if ($validador->fails()) {
      return back();
    }

    $datos = $request->all();

    $Paquete->update($datos);

    return redirect('paquetes');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Paquete::destroy($id);

    return redirect('paquetes');
  }
}
