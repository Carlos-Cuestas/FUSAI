<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function catalogocolector(){
        return $this->hasMany(CatalogoColectores::class);
    }
}
