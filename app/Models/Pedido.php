<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [        
        'cantidad',
        'namemn',
        'producto_id',

    ];

    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }

    public function cuidades(){
        return $this->belongsToMany('App\Models\Ciudade');
    }

    public function pedidotrasportes(){
        return $this->hasMany('App\Models\Pedidotransporte');
    }

    public function despachos(){
        return $this->hasMany('App\Models\Despacho');
    }

    public function logistica(){
        return $this->hasOne('App\Models\Logistica');
    }

}
