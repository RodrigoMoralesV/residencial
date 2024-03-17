<?php

namespace App\Http\Controllers;

use App\Models\Zonas_comun;
use Illuminate\Http\Request;

class ZonaComunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zonas_comunes = Zonas_comun::where('estado',1)->get();
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
        //
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
    public function edit(Zonas_comun $zonas_comun)
    {
        $zonas_comun = Zonas_comun::all();
        return view('edit',compact('zonas_comun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zonas_comun $zonas_comun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zonas_comun $zonas_comun)
    {
        //
    }
}
