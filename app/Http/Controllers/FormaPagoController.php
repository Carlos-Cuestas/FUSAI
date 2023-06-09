<?php

namespace App\Http\Controllers;

use App\Models\FormaPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formapagos = FormaPago::all();
        $colNames = Schema::getColumnListing('forma_pagos');
        return view('Catalogos/formapagos.index',compact('formapagos','colNames'));
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
        $attributes = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);
        FormaPago::create($attributes);

        return redirect()->route('formapagos.index')->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormaPago $formaPago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormaPago $formaPago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormaPago $formaPago)
    {
        $attributes = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);

        $formaPago->fill($attributes)->save();

        return redirect()->route('formapagos.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormaPago $formaPago)
    {
        $formaPago->delete();
        return redirect()->route('formapagos.index')->with('success','Borrado Correctamente');
    }
}
