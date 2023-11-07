<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desapacho extends Model
{
    use HasFactory;

     protected $fillable = [
        'fecha',        
    ];

    public function pedido(){
        return $this->belongsTo('App\Models\Pedido');
    }

    public function estadohechos(){
        return $this->hasMany('App\Models\Estadohecho');
    }

    public function despachotransportes(){
        return $this->hasMany('App\Models\Desapachotransporte');
    }


    public function users(){
        return $this->belongsTo('App\Models\User');
    }


}
