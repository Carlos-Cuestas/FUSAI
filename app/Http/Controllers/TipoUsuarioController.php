<?php

namespace App\Http\Controllers;

use App\Models\RegUserMov;
use App\Models\Tipousuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipousuarios = Tipousuario::all();
        $colNames = Schema::getColumnListing('tipousuarios');
        return view('Catalogos/tipousuarios.index', compact('tipousuarios'), compact('colNames'));
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
        Tipousuario::create($attributes);

        return redirect()->route('tipousuarios.index')->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipousuario $tipousuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipousuario $tipousuario)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipousuario $tipousuario)
    {
        /*dd($tipousuario);*/
        /*d($tipousuario);*/
        $attributes = $request->validate([
            'Dia' =>'required|date',
            'zona' =>'required|string|max:255',
            'Tipo' =>'required|string|max:255',
        ]);
        RegUserMov::create($attributes);

        $attributes = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);

        $tipousuario->fill($attributes)->save();

        return redirect()->route('tipousuarios.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipousuario $tipousuario)
    {
        $tipousuario->delete();
        return redirect()->route('tipousuarios.index')->with('success','Borrado Correctamente');
    }
}
