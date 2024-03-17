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
        $bloques = Bloque::where('estado',1)->get();
        return view('bloques.index',compact('bloques'));
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
        $validator = Validator::make($request->all(),['bloque'=>'required|max:50','estado'=>'required',]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $datos = $request->all();
        Bloque::create($datos);

        return view('bloques.index');
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
      return view('bloques.edit',compact('bloque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bloque $bloque)
    {
      $datos = $request->all();

      $bloque->update($datos);

      return redirect('bloques');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Bloque::destroy($id);

      return redirect('bloques');
    }
}
