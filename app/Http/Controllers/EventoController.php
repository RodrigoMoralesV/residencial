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
    $eventos = Evento::all();
    
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
    $validator = Validator::make($request->all(), [
      'nombre' => 'required|max:100', 
      'descripcion' => 'required|max:100', 
      'fecha' => 'required',
      'hora' => 'required', 
      'estado' => 'required',]);

    if ($validator->fails()) {
      return back()->withErrors($validator);
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
    $validator = Validator::make($request->all(), [
      'nombre' => 'required|max:100', 
      'descripcion' => 'required|max:100', 
      'fecha' => ['required',
        function ($attribute, $value, $fail) use ($request) {
        // Verificar que la combinación de fecha y hora no coincida con los valores enviados en la solicitud
          $fecha_enviada = $request->input('fecha');
          $hora_enviada = $request->input('hora');

          if ($value === $fecha_enviada && $value === $hora_enviada) {
            $fail('La fecha y hora no pueden coincidir con los valores enviados.');
          }
        },
      ], 
      'hora' => 'required', 
      'estado' => 'required',]);

    if ($validator->fails()) {
      return back()->withErrors([
        'nombre' => 'El nombre del evento excede los caracteres maximos',
        'descripcion' => 'La descripción del evento excede los caracteres maximos',
        'hora' => 'La fecha y hora no pueden coincidir con los valores enviados',
      ]);
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
    $evento = Evento::find($id);

    if($evento->estado == 1){
      $evento->where('id', $id)->update(['estado' => 0]);
    } 
    else{
      $evento->where('id', $id)->update(['estado' => 1]); 
    }

    return redirect('eventos');
  }
}
