<?php

namespace App\Models;

use App\Models\Tipocolector;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [
        'id'
    ];
    public function modulopagos(){
        return $this -> hasMany(ModuloPago::class);
    }

    public function tipocolector(){
        return $this->hasMany(Tipocolector::class);
    }


}
