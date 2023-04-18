<?php

namespace App\Http\Controllers;

use App\Models\RegUserMov;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class RegusermovController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regs = RegUserMov::all();
        $colNames = Schema::getColumnListing('reg_user_movs');
        return view('regs.index', compact('regs'), compact('colNames'));
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
            'Dia' =>'required|date',
            'zona' =>'required|string|max:255',
            'Tipo' =>'required|string|max:255',
        ]);
        RegUserMov::create($attributes);

        return back()->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(RegUserMov $regUserMov)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegUserMov $regUserMov)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegUserMov $regUserMov)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegUserMov $regUserMov)
    {
        $regUserMov->delete();
        return redirect()->route('tipousuarios.index')->with('success','Borrado Correctamente');
    }
}
