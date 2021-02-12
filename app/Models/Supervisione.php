<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisione extends Model
{
    use HasFactory;

    // Relacion uno a muchos

    public function hechos(){
        return $this->hasMany(Estadohecho::class);
    }

    // Relacion uno a muchos

    public function despachos(){
        return $this->hasMany(Despacho::class);
    }
}
