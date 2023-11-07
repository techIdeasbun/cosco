<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistica extends Model
{
    use HasFactory;

    public function pedido(){
        return $this->belongsTo('App\Models\Pedido');
    }

    public function supervision(){
        return $this->belongsTo('App\Models\Supervision');
    }

    public function bascula(){
        return $this->belongsTo('App\Models\Bascula');
    }

    public function operador(){
        return $this->belongsTo('App\Models\Operador');
    }

    public function bodega(){
        return $this->belongsTo('App\Models\Bodega');
    }
    

}

