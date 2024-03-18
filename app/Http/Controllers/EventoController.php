<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $eventos = Evento::where('estado', 1)->get();
    
    return view('eventos.index', compact('eventos'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('eventos.new');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), ['nombre' => 'required|max:100', 'estado' => 'required|max:100','fecha' => 'required', 'hora' => 'required', 'estado' => 'required',]);

    if($validator->fails()){
      return back();
    }

    $datos = $request->all();

    Evento::create($datos);

    return redirect('eventos');
  }

  /**
   * Display the specified resource.
   */
  public function show(Evento $evento)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $evento = Evento::find($id);

    return view('eventos.edit', compact('evento'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Evento $evento)
  {
    $validator = Validator::make($request->all(), ['nombre' => 'required|max:100', 'estado' => 'required|max:100','fecha' => 'required', 'hora' => 'required', 'estado' => 'required',]);

    if($validator->fails()){
      return back();
    }
    
    $datos = $request->all();

    $evento->update($datos);

    return redirect('eventos');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Evento::destroy($id);   

    return redirect('eventos');
  }
}
