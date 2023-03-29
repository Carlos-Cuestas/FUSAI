<?php

namespace App\Http\Controllers;

use App\Models\TipoPago;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipopagos = TipoPago::all();
        return view('tipopagos.index', compact('tipopagos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $tipopago =new TipoPago;
            $tipopago->nombre = $request->nombre;
            $tipopago->save();
            return redirect()->route('tipopagos.index')->with('success', 'Agregado corectamente');
        }catch(\Exception $e){
            return redirect()->route('tipopagos.index')->with('error', 'Fallo al Agregar');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoPago $tipoPago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoPago $tipoPago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoPago $tipoPago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            TipoPago::find($id)->delete;
            return redirect()->route('tipopagos.index')->with('success','borrado correctamente');
        }catch(\Exception $e){
            return redirect()->route('tipopagos.index')->with('error','error al borrar');
        }

    }
}
