<?php

namespace App\Http\Controllers;

use App\Models\Tipocolector;
use App\Models\TipoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TipocolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Catalogos/tipocolectores.index', [
            'tipocolectores' => Tipocolector::all()->load('tipopago'),
            'colNames' => Schema::getColumnListing('tipocolectors'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $catalogoscolector = $request->validate([
            'nombre' => 'required|string|max:255',
            'registro' => 'required|numeric',
            'estado' => 'required|string|max:255',
            'cliente' => 'required|string|max:255',
            'tipo_pago_id' => 'required|numeric|exists:tipo_pagos,id',
        ]);

        Tipocolector::create($catalogoscolector);
        return redirect()->route('tipocolectores.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipocolector $tipocolector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipocolector $tipocolector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipocolector $tipocolector)
    {
        $attributes = $request->validate([
            'nombre' => 'required|string|max:255',
            'registro' => 'required|numeric',
            'estado' => 'required|string|max:255',
            'cliente' => 'required|string|max:255',
            'tipo_pago_id' => 'required|numeric|exists:tipo_pagos,id',
        ]);

        $tipocolector->fill($attributes)->save();

        return redirect()->route('tipocolectores.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipocolector $tipocolector)
    {
        $tipocolector->delete();
        return redirect()->route('tipocolectores.index')->with('success','Borrado Correctamente');
    }
}
