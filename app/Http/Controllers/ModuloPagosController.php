<?php

namespace App\Http\Controllers;

use App\Models\ModuloPago;
use Illuminate\Http\Request;

class ModuloPagosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modulopagos = ModuloPago::all();
        return view('Pagos/moduloPagos.index',compact('modulopagos'));
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
    public function show(ModuloPago $moduloPago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModuloPago $moduloPago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloPago $moduloPago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloPago $moduloPago)
    {
        //
    }
}
