<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use App\Models\Vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermisoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $permisos = Permiso::where('estado', 1)->get();

    return view('permisos.index', compact('permisos'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $permisos = Vivienda::where('estado', 1)->get();

    return view('permisos.new', compact('permisos'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validador = Validator::make($request->all(), [
      'vivienda_id' => 'required',
      'nombre_visitante' => 'required|max:50',
      'documento_visitante' => 'required|max:50',
      'estado' => 'required',
    ]);

    if ($validador->fails()) {
      return back()->withErrors($validador)->withInput();
    }

    $datos = $request->all();

    Permiso::create($datos);

    return redirect('permisos');
  }

  /**
   * Display the specified resource.
   */
  public function show(Permiso $permiso)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $permiso = Permiso::find($id);

    $viviendas = Vivienda::all();

    return view("permisos.edit",compact('permiso','viviendas'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Permiso $permiso)
  {
    $validador = Validator::make($request->all(), [
      'vivienda_id' => 'required',
      'nombre_visitante' => 'required|max:50',
      'documento_visitante' => 'required|max:50',
      'estado' => 'required',
    ]);

    if ($validador->fails()) {
      return back()->withErrors($validador)->withInput();
    }

    $datos = $request->all();

    $permiso->update($datos);

    return redirect('permisos');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Permiso::destroy($id);

    return redirect('permisos');
  }
}
