<?php

namespace App\Livewire\Forms\Actividad;

use App\Models\Actividade;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormActividadCreate extends Form
{
    #[Rule('required')]
    public $name;   

    public $modalC = false;


    public function save()
    {     
        
        $this->validate();
        $actividad = Actividade::create($this->only('name'));
        $actividad->save();    
        $this->reset();       
        
    }
}
