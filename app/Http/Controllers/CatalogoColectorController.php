<?php

namespace App\Http\Controllers;

use App\Models\CatalogoColectores;
use App\Models\TipoPago;
use Illuminate\Http\Request;

class CatalogoColectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogocolectores = CatalogoColectores::all();
        $tipopagos = TipoPago::all();
        return view('Catalogos\agencias.index', compact('agencias'));
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

        CatalogoColectores::create($catalogoscolector);
        return redirect()->route('catalogocolectores.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(CatalogoColectores $catalogoColectores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatalogoColectores $catalogoColectores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatalogoColectores $catalogoColectores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatalogoColectores $catalogoColectores)
    {
        //
    }
}
