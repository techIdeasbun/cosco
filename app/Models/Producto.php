<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Relacion Muchos a Muchos

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
