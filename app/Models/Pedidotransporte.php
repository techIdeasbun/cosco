<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidotransporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'cuota',        
    ];

    public function pedido(){
        return $this->belongsTo('App\Models\Pedido');
    }

    public function transportes(){
        return $this->belongsTo('App\Models\Transportes');
    }
}
