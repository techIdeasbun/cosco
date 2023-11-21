<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nit',
        'direccion',
        'telefono',
        'calificaraccidente_id',
        'calificardisponibilidade_id',
        'calificarentrega_id'        
    ];

    public function pedidotransporte(){
        return $this->hasMany('App\Models\Pedidotransporte');
    }

    public function despachotransporte(){
        return $this->hasMany('App\Models\Despachotransporte');
    }

    public function calificaraccidente(){
        return $this->belongsTo('App\Models\Calificaraccidente');
    }

    public function calificardisponibilidade(){
        return $this->belongsTo('App\Models\Calificardisponibilidade');
    }

    public function calificarentrega(){
        return $this->belongsTo('App\Models\Calificarentrega');
    }
    
}
