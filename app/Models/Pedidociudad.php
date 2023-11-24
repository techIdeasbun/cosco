<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidociudad extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cuota',
        'pedido_id',
        'ciudad_id',
    ];

    public function pedido(){
        return $this->belongsTo('App\Models\Pedido');
    }

    public function ciudad(){
        return $this->belongsTo('App\Models\Ciudad');
    }
}
