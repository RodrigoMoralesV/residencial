<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Residente;
use App\Models\Zonas_comun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $reservas = Reserva::where('estado', 1)
      ->with('zonas_comun')
      ->get();

    return view('reservas.index', compact('reservas'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $zonas_comunes = Zonas_comun::where('estado', 1)->get();
    
    $residentes = Residente::where('estado', 1)->get();

    return view('reservas.new', compact('zonas_comunes','residentes'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'zona_comun_id' => 'required',
      'fecha_reserva' => 'required',
      'hora_reserva' => 'required',
      'residente_id' => 'required',
      'estado' => 'required',
    ]);

    if ($validator->fails()) {
      return back()->withErrors($validator)->withInput();
    }

    $datos = $request->all();

    Reserva::create($datos);

    return redirect('reservas');
  }

  /**
   * Display the specified resource.
   */
  public function show(Reserva $reserva)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $zonas_comunes = Zonas_comun::where('estado', 1)->get();

    $residentes = Residente::where('estado', 1)->get();

    $reserva = Reserva::find($id);

    return view('reservas.edit',compact('zonas_comunes','residentes','reserva'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Reserva $reserva)
  {
    
    $validator = Validator::make($request->all(), [
      'zona_comun_id' => 'required',
      'fecha_reserva' => 'required',
      'hora_reserva' => 'required',
      'residente_id' => 'required',
      'estado' => 'required',
    ]);

    if ($validator->fails()) {
      return back()->withErrors($validator)->withInput();
    }

    $datos = $request->all();

    $reserva->update($datos);

    return redirect('reservas');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Reserva::destroy($id);

    return redirect('reservas');
  }
}
