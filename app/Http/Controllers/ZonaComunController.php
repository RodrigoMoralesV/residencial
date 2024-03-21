<?php

namespace App\Http\Controllers;

use App\Models\Zonas_comun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZonaComunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zonas_comunes = Zonas_comun::all();
        return view('zonas_comunes.index',compact('zonas_comunes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('zonas_comunes.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(),
        ['nombre'=>'required|max:50','estado'=>'required',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();

        Zonas_comun::create($datos);
        
        return redirect('zonas_comunes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zonas_comun $zonas_comun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $zonas_comune = Zonas_comun::find($id);
        
        return view('zonas_comunes.edit',compact('zonas_comune'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zonas_comun $zonas_comune)
    {
        $validador = Validator::make($request->all(),['nombre'=>'required|max:50','estado'=>'required',]);

        if ($validador->fails()){
            return back()->withErrors($validador)->withInput();
        }

        $datos = $request->all();

        $zonas_comune->update($datos);

        return redirect('zonas_comunes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $zonas_comun = Zonas_comun::find($id);
    
        if($zonas_comun->estado == 1){
          $zonas_comun->where('id', $id)->update(['estado' => 0]);
        } 
        else{
          $zonas_comun->where('id', $id)->update(['estado' => 1]); 
        }

        return redirect('zonas_comunes');
    }
}
