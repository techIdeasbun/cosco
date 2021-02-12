<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    use HasFactory;

    //relacion Uno a Muchos

    public function despachos(){
        return $this->hasMany(Despacho::class);
    }
    
    public function asignaciones(){
        return $this->hasMany(Asignaciontransporte::class);
    }

    public function fletes(){
        return $this->hasMany(Flete::class);
    }

    public function accidentes(){
        return $this->hasMany(Calificaraccidente::class);
    }

    public function disponibilidades(){
        return $this->hasMany(Calificardisponibilidade::class);
    }

    public function entregas(){
        return $this->hasMany(Calificarentrega::class);
    }
}
