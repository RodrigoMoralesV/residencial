<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paquetes = Paquete::where('estado',1)->get();
        return view('paquetes.index',compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paquetes = Paquete::all();
        return view("paquetes.new",compact('paquetes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(),['destinatario'=>'required',
        'vivenda_id'=>'required',
        'recibido_por'=>'required',
        'entregado_a'=>'required',
        'estado'=>'required',]);

        if ($validador->fails()){
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
    public function edit(Paquete $Paquete)
    {
        $paquetes = Paquete::all();
        return view("paquetes.edit",compact('paquetes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paquete $Paquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paquete $Paquete)
    {
        //
    }
}
