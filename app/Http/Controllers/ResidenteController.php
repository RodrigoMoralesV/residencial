<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use App\Models\Vivienda;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Validator;

class ResidenteController extends Controller
{
  public function registrar()
  {
    $faker = Faker::create();

    for ($i=0; $i < 5; $i++) { 
            Residente::create([
                'nombre' => $faker->name(),
                'movil' => $faker->phoneNumber(),
                'vivienda_id' => $faker->numberBetween(1,4),
                'propietario' => $faker->numberBetween(0,1)
            ]);
        }

    return view('residentes.index');
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $residentes = Residente::all();
    
    return view('residentes.index', compact('residentes'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $viviendas = Vivienda::where('estado',1)->get();

    return view("residentes.new", compact('viviendas'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validador = Validator::make($request->all(), [
      'nombre' => 'required|max:50', 
      'movil' => 'required|max:50',
      'vivienda_id' => 'required',
      'propietario' => 'required',
      'estado' => 'required',
    ]);

    if ($validador->fails()) {
      return back()->withErrors($validador)->withInput();
    }

    $datos = $request->all();

    Residente::create($datos);

    return redirect('residentes');
  }

  /**
   * Display the specified resource.
   */
  public function show(Residente $residente)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $residentes = Residente::find($id);

    $viviendas = Vivienda::all();

    return view("residentes.edit", compact('residentes','viviendas'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Residente $residente)
  {
    //dd($request->all());

    $validador = Validator::make($request->all(), [
      'nombre' => 'required|max:50', 
      'movil' => 'required|max:50',
      'vivienda_id' => 'required',
      'propietario' => 'required',
      'estado' => 'required',
    ]);

    if ($validador->fails()) {
      return back()->withErrors($validador)->withInput();
    }

    $datos = $request->all();

    $residente->update($datos);

    return redirect('residentes');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $residente = Residente::find($id);

    if($residente->estado == 1){
      $residente->where('id', $id)->update(['estado' => 0]);
    } 
    else{
      $residente->where('id', $id)->update(['estado' => 1]); 
    }

    return redirect('residentes');
  }
}
