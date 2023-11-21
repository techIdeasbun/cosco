<?php

namespace App\Livewire\Forms\Actividad;

use App\Models\Actividade;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormActividadEdit extends Form
{
    #[Rule('required')]
    public $name;

    public $actividadId ='';
    public $modalE = false;

    public function edit($actividadId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->actividadId = $actividadId;
        $actividad = Actividade::find($actividadId);

        
        $this->name = $actividad->name;
        
    }

    public function update()
    {
        $this->validate();
        
        $actividad = Actividade::find($this->actividadId);

        $actividad->update(
            $this->only('name')
        );
        
        $this->reset();
    }
}
