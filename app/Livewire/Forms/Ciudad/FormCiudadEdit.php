<?php

namespace App\Livewire\Forms\Ciudad;

use App\Models\Ciudade;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormCiudadEdit extends Form
{
    #[Rule('required')]
    public $name;

    public $ciudadId ='';
    public $modalE = false;

    public function edit($ciudadId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->ciudadId = $ciudadId;
        $ciudad = Ciudade::find($ciudadId);

        
        $this->name = $ciudad->name;
        
    }

    public function update()
    {
        $this->validate();
        
        $ciudad = Ciudade::find($this->ciudadId);

        $ciudad->update(
            $this->only('name')
        );
        
        $this->reset();
    }
}
