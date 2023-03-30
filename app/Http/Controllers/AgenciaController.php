<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencias = Agencia::all();
        return view('Catalogos\agencias.index', compact('agencias'));
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
        $datosAgencia = $request->validate([
            'nombre' => 'required|string|max:255',
            'jefe' => 'required|string|max:255',
            'estado' => 'required|string|max:15'
        ]);

        Agencia::create($datosAgencia);

        return redirect()->route('agencias.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agencia $agencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agencia $agencia)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agencia $agencia)
    {
      
        $attributes = $request->validate([
            'nombre' => 'required|string|max:255',
            'jefe' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
        ]);

        $agencia->fill($attributes)->save();

        return redirect()->route('agencias.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agencia $agencia)
    {
        $agencia->delete();
        return redirect()->route('agencias.index')->with('success', 'User deleted successfully');
    }
}
