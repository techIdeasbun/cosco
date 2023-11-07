<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operadore extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nit',
        'direccion',
        'telefono',        
    ];

    public function logistica(){
        return $this->hasOne('App\Models\Logistica');
    }
    
}
