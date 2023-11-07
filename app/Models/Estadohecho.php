<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadohecho extends Model
{
    use HasFactory;

    protected $fillable = [
        'hora',
        'observacion',        
    ];

    public function despacho(){
        return $this->belongsTo('App\Models\Despacho');
    }

    public function actividades(){
        return $this->belongsTo('App\Models\Actividade');
    }


}
