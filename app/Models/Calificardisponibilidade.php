<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificardisponibilidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'valoracion',        
    ];

    public function transporte(){
        return $this->hasOne('App\Models\Transporte');
    }
}
