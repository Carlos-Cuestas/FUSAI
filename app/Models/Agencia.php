<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = [
        'id'
    ];

    public function users(){
        return $this -> hasMany(User::class);
    }

    public function modulopagos(){
        return $this -> hasMany(ModuloPago::class);
    }
}
