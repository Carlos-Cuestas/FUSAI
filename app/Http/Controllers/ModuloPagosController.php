<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use App\Models\FormaPago;
use App\Models\ModuloPago;
use App\Models\Tipocolector;
use App\Models\TipoMovimiento;
use App\Models\TipoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ModuloPagosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pagos/modulopagos.index', [
            'modulopagos' => ModuloPago::all()->load('tipopagos'),
            'tipopagos' => TipoPago::all(),
            'agencias' => Agencia::all(),
            'tipocolectores' => Tipocolector::all(),
            'tipomovimientos' => TipoMovimiento::all(),
            'formapagos' => FormaPago::all(),
            'colNames' => Schema::getColumnListing('modulo_pagos'),
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

        $attributes = $request->validate([
            'monto' =>'required|numeric',
            'agencia_id' =>'required|numeric|exists:agencias,id',
            'tipo_pago_id' =>'required|numeric|exists:tipo_pagos,id',
            'tipo_movimiento_id' =>'required|numeric|exists:tipo_movimientos,id',
            'forma_pago_id' =>'required|numeric|exists:forma_pagos,id',
            'tipocolector_id' =>'required|numeric|exists:tipocolectors,id',
        ]);

        ModuloPago::create($attributes);

        return redirect()->route('modulopagos.index')->with('success','Creado Correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(ModuloPago $modulopago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModuloPago $modulopago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloPago $modulopago)
    {
        $attributes = $request->validate([
            'monto' =>'required|numeric',
            'agencia_id' =>'required|numeric|exists:agencias,id',
            'tipo_pago_id' =>'required|numeric|exists:tipo_pagos,id',
            'tipo_movimiento_id' =>'required|numeric|exists:tipo_movimientos,id',
            'forma_pago_id' =>'required|numeric|exists:forma_pagos,id',
            'tipocolector_id' =>'required|numeric|exists:tipocolectors,id',

        ]);

        $modulopago->fill($attributes)->save();

        return redirect()->route('modulopagos.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloPago $modulopago)
    {
        $modulopago->delete();
        return redirect()->route('modulopagos.index')->with('success','Borrado Correctamente');
    }
}
