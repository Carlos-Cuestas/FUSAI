<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoColectores extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = [
        'id'
    ];
    
    public function tipopago(){
        return $this->belongsTo(TipoPago::class);
    }
}
