<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloPago extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [
        'id'
    ];
    public function agencias(){
        return $this -> belongsTo(Agencia::class);
    }
    public function tipomovimientos(){
        return $this -> belongsTo(TipoMovimiento::class);
    }
    public function formapagos(){
        return $this -> belongsTo(FormaPago::class);
    }
    public function tipopagos(){
        return $this -> belongsTo(TipoPago::class);
    }
    public function tipocolectores(){
        return $this -> belongsTo(Tipocolector::class);
    }
}
