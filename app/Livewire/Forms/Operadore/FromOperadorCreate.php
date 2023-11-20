<?php

namespace App\Livewire\Forms\Operadore;

use Livewire\Attributes\Rule;
use Livewire\Form;
use App\Models\Operadore;

class FromOperadorCreate extends Form
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
        $operador = Operadore::create($this->only('name', 'nit', 'direccion', 'telefono'));
        $operador->save();    
        $this->reset();       
        
    }
}
