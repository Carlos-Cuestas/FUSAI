<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use App\Models\Tipousuario;
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
        return view('users.index',[
            'users' => User::all()->load('agencia','tipousuario')->map(function ($user) {
                $user->passwordToNull();
                return $user;
            }),
            'agencias' => Agencia::all(),
            'tipousuarios' => Tipousuario::all(),
            'colNames' => Schema::getColumnListing('users'),

        ]);
/*
        $users = User::with('agencias')->get();

        $colNames = Schema::getColumnListing('users');
        return view('users.index', compact('users','colNames'));
*/
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
            'password' =>'required|string|max:255',
            'email' =>'required|string|max:255',
            'agencia_id' =>'required|numeric|exists:agencias,id',
            'tipousuario_id' =>'required|numeric|exists:tipousuarios,id',

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
            'email' =>'required|string|max:255',
            'agencia_id' =>'required|numeric|exists:agencias,id',
            'tipousuario_id' =>'required|numeric|exists:tipousuarios,id',

        ]);

        $user->fill($attributes);

        if($request->get('password') != null) {
            $passwordAttribute = $request->validate([
                'password' =>'string|max:255',
            ]);

            $user->fill($passwordAttribute);
        }

        $user->save();

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
