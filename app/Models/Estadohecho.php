<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadohecho extends Model
{
    use HasFactory;

    // Relacion Uno A Muchos Inversa

    public function actividad(){
        return $this->belongsTo(Actividade::class);
    }

    public function supervision(){
        return $this->belongsTo(Supervisione::class);
    }

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }
}
