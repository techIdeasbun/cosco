<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificaraccidente extends Model
{
    use HasFactory;

    protected $fillable = ['valoracion', 'ciudade_id','transporte_id'];

    
    // Relacion Uno A Muchos Inversa

    public function ciudad(){
        return $this->belongsTo(Ciudade::class);
    }   

    public function transporte(){
        return $this->belongsTo(Transporte::class);
    }
}
