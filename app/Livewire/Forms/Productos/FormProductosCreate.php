<?php

namespace App\Livewire\Forms\Productos;

use App\Models\Producto;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormProductosCreate extends Form
{
    #[Rule('required')]
    public $name;
    
    #[Rule('required')]
    public $calidad;

    public $modalC = false;


    public function save()
    {     
        
        $this->validate();
        $producto = Producto::create($this->only('name','calidad'));
        $producto->save();    
        $this->reset();       
        
    }
}
