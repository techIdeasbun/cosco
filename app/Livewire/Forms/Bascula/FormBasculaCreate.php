<?php

namespace App\Livewire\Forms\Bascula;

use App\Models\Bascula;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormBasculaCreate extends Form
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
        $bascula = Bascula::create($this->only('name', 'nit', 'direccion', 'telefono'));
        $bascula->save();    
        $this->reset();       
        
    }
}
