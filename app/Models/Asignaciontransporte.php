<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignaciontransporte extends Model
{
    use HasFactory;

    // Relacion Uno A Muchos

    public function despachos(){
        return $this->hasMany(Despacho::class);
    }

    //Relacion Uno A Muchos Inversa

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }
    
    public function transporte(){
        return $this->belongsTo(Transporte::class);
    }

    public function ciudad(){
        return $this->belongsTo(Ciudade::class);
    }
}
