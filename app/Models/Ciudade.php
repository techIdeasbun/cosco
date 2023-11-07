<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        
    ];

    public function pedidos(){
        return $this->belongsToMany('App\Models\Pedido');
    }
    
}
