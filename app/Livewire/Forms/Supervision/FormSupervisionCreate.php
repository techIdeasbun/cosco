<?php

namespace App\Livewire\Forms\Supervision;

use App\Models\Supervisione;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormSupervisionCreate extends Form
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
        $supervision = Supervisione::create($this->only('name', 'nit', 'direccion', 'telefono'));
        $supervision->save();    
        $this->reset();       
        
    }
}
