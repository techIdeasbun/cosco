<?php

namespace App\Livewire\Forms\Ciudad;

use App\Models\Ciudade;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormCiudadCreate extends Form
{
    #[Rule('required')]
    public $name;   

    public $modalC = false;


    public function save()
    {     
        
        $this->validate();
        $ciudad = Ciudade::create($this->only('name'));
        $ciudad->save();    
        $this->reset();       
        
    }
}
