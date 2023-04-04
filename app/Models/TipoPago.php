<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [
        'id'
    ];
    public function catalogocolector(){
        return $this->hasMany(CatalogoColectores::class);
    }
}
