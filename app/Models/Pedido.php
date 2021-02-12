<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Relacion uno a muchos

    public function hechos(){
        return $this->hasMany(Estadohecho::class);
    }

    public function despachos(){
        return $this->hasMany(Despacho::class);
    }

    public function transportes(){
        return $this->hasMany(Asignaciontransporte::class);
    }    

    // Relacion uno a muchos

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    //Relacion Muchos a Muchos

    public function pruductos(){
        return $this->belongsToMany(Producto::class);
    }
}
