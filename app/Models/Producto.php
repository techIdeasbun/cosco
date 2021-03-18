<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug','calidad'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion Muchos a Muchos

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
