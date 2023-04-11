<?php

namespace App\Http\Controllers;

use App\Models\TipoMovimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TipomovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipomovimientos = TipoMovimiento::all();
        $colNames = Schema::getColumnListing('tipo_movimientos');
        return view('Catalogos/tipomovimientos.index', compact('tipomovimientos', 'colNames'));
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
        TipoMovimiento::create($attributes);

        return redirect()->route('tipomovimientos.index')->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoMovimiento $tipomovimiento)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoMovimiento $tipoMovimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoMovimiento $tipomovimiento)
    {
        $attributes = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);

        $tipomovimiento->fill($attributes)->save();

        return redirect()->route('tipomovimientos.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoMovimiento $tipomovimiento)
    {
        $tipomovimiento->delete();
        return redirect()->route('tipomovimientos.index')->with('success','Borrado Correctamente');
    }
}
