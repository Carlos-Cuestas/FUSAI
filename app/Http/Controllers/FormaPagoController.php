<?php

namespace App\Http\Controllers;

use App\Models\FormaPago;
use Illuminate\Http\Request;

class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formapagos = FormaPago::all();
        return view('formapagos.index',compact('formapagos'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormaPago $formaPago)
    {
        //
    }
}