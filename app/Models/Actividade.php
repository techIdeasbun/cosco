<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    // Relacion uno a muchos

    public function hechos(){
        return $this->hasMany(Estadohecho::class);
    }
}
