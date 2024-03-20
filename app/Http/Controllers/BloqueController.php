<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BloqueController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $bloques = Bloque::all();

    return view('bloques.index', compact('bloques'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('bloques.new');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), ['nombre' => 'required|unique:bloques|max:50', 'estado' => 'required',]);

    if ($validator->fails()) {
      return back()->withErrors([
        'nombre' => 'Ya existe un bloque con este nombre.'
      ]);
    }

    $datos = $request->all();
    
    Bloque::create($datos);

    return redirect('bloques');
  }

  /**
   * Display the specified resource.
   */
  public function show(Bloque $bloque)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $bloque = Bloque::find($id);
    
    return view('bloques.edit', compact('bloque'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Bloque $bloque)
  {
    $validator = Validator::make($request->all(), ['nombre' => 'required|unique:bloques|max:50', 'estado' => 'required',]);

    if ($validator->fails()) {
      return back()->withErrors([
        'nombre' => 'Ya existe un bloque con este nombre.'
      ]);
    }

    $datos = $request->all();

    $bloque->update($datos);

    return redirect('bloques');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $bloque = Bloque::find($id);

    if($bloque->estado == 1){
      $bloque->where('id', $id)->update(['estado' => 0]);
    } 
    else{
      $bloque->where('id', $id)->update(['estado' => 1]); 
    }

    return redirect('bloques');
  }
}
