<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Validator;

class ResidenteController extends Controller
{
    public function registrar(){

        $faker = Faker::create();

        /*for ($i=0; $i < 10; $i++) { 
            Residente::create([
                'nombre' => $faker->name(),
                'movil' => $faker->phoneNumber(),
                'vivienda_id' => $faker->numberBetween(1,4)
            ]);
        }*/

        return 'Datos';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residentes = Residente::where('estado',1)
            ->with('vivienda')
            ->get();
        return view('residentes.index',compact('residentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residentes = Residente::all();
        return view("residentes.new",compact('residentes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(),['nombre'=>'required|max:20','bloque_id'=>'required',
        'movil' => 'required',
        'bloque'=>'required',
        'nomenclatura'=>'required',
        'propietario'=>'required',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();
        Residente::create($datos);

        return redirect('viviendas');
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
    public function edit(Residente $residente)
    {
        $residentes = Residente::all();
        return view("residentes.edit",compact('residentes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Residente $residente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Residente $residente)
    {
        //
    }
}
