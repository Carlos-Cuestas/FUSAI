<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{
    /**
     * Display a listin of the resource.
     */
    public function index()
    {
        $users = User::all();

        $colNames = Schema::getColumnListing('users');
        return view('users.index', compact('users','colNames'));
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
            'apellido' =>'required|string|max:255',
            'contraseña' =>'required|string|max:255',
            'correo' =>'required|string|max:255',

        ]);
        User::create($attributes);

        return redirect()->route('users.index')->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        
        $attributes = $request->validate([
            'nombre' =>'required|string|max:255',
            'apellido' =>'required|string|max:255',
            'correo' =>'required|string|max:255',
            'contraseña' =>'required|string|max:255',

        ]);

        $user->fill($attributes)->save();

        return redirect()->route('users.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','Borrado Correctamente');
    }
}
