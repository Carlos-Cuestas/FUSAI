<?php

namespace App\Http\Controllers;
use App\Models\TipoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TipoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipopagos = TipoPago::all();
        $colNames = Schema::getColumnListing('tipopagos');
        return view('Catalogos/tipopagos.index', compact('tipopagos'), compact('colNames'));
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
        $attributes = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);
        TipoPago::create($attributes);

        return redirect()->route('tipopagos.index')->with('success','Creado Correctamente');
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
        $attributes = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);

        $tipoPago->fill($attributes)->save();

        return redirect()->route('tipopagos.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoPago $tipopago)
    {
        $tipopago->delete();
        return redirect()->route('tipousuarios.index')->with('success','Borrado Correctamente');

    }
}
