<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    use HasFactory;

    // Relacion Uno A Muchos Inversa

    public function supervision(){
        return $this->belongsTo(Supervisione::class);
    }   

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

    public function operador(){
        return $this->belongsTo(Operadore::class);
    }

    public function bascula(){
        return $this->belongsTo(Bascula::class);
    }

    public function ciudad(){
        return $this->belongsTo(Ciudade::class);
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
    
    public function bodega(){
        return $this->belongsTo(Bodega::class);
    }

    public function transporte(){
        return $this->belongsTo(Asignaciontransporte::class);
    }

}
