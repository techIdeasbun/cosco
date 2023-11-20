<?php

namespace App\Livewire\Forms\Bodegas;

use App\Models\Bodega;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormBodegaCreate extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $nit;

    #[Rule('required')]
    public $direccion;

    #[Rule('required')]
    public $telefono;

    public $modalC = false;


    public function save()
    {     
        
        $this->validate();
        $bodega = Bodega::create($this->only('name', 'nit', 'direccion', 'telefono'));
        $bodega->save();    
        $this->reset();       
        
    }
}
