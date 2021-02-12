<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    //Relacion Uno A Muchos

    public function Asignaciones(){
        return $this->hasMany(Asignaciontransporte::class);
    }

    public function fletes(){
        return $this->hasMany(Flete::class);
    }

    public function engtregas(){
        return $this->hasMany(Calificarentrega::class);
    }

    public function disponibilidades(){
        return $this->hasMany(Calificardisponibilidade::class);
    }

    public function accidentes(){
        return $this->hasMany(Calificaraccidente::class);
    }
}
