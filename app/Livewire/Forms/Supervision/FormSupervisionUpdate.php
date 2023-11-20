<?php

namespace App\Livewire\Forms\Supervision;

use App\Models\Supervisione;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormSupervisionUpdate extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $nit;

    #[Rule('required')]
    public $direccion;

    #[Rule('required')]
    public $telefono;

    public $supervisionId ='';
    public $modalE = false;

    public function edit($supervisionId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->supervisionId = $supervisionId;
        $supervision = Supervisione::find($supervisionId);

        
        $this->name = $supervision->name;
        $this->nit = $supervision->nit;
        $this->direccion = $supervision->direccion;
        $this->telefono = $supervision->telefono;
    }

    public function update()
    {
        $this->validate();
        
        $supervision = Supervisione::find($this->operadorId);

        $supervision->update(
            $this->only('name', 'nit', 'direccion', 'telefono')
        );
        
        $this->reset();
    }
}
