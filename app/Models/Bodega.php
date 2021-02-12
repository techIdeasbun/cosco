<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    //Relacion Uno A Muchos

    public function despachos(){
        return $this->hasMany(Despacho::class);
    }
}
