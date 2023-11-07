<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despachotransporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'diario',        
    ];

    public function despacho(){
        return $this->belongsTo('App\Models\Despacho');
    }

    public function transporte(){
        return $this->belongsTo('App\Models\Despacho');
    }
}
