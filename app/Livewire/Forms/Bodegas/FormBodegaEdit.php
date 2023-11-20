<?php

namespace App\Livewire\Forms\Bodegas;

use App\Models\Bodega;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormBodegaEdit extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $nit;

    #[Rule('required')]
    public $direccion;

    #[Rule('required')]
    public $telefono;

    public $bodegaId ='';
    public $modalE = false;

    public function edit($bodegaId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->bodegaId = $bodegaId;
        $bodega = Bodega::find($bodegaId);

        
        $this->name = $bodega->name;
        $this->nit = $bodega->nit;
        $this->direccion = $bodega->direccion;
        $this->telefono = $bodega->telefono;
    }

    public function update()
    {
        $this->validate();
        
        $bodega = Bodega::find($this->bodegaId);

        $bodega->update(
            $this->only('name', 'nit', 'direccion', 'telefono')
        );
        
        $this->reset();
    }
}
