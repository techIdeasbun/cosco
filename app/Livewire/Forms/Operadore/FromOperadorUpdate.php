<?php

namespace App\Livewire\Forms\Operadore;

use App\Models\Operadore;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FromOperadorUpdate extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $nit;

    #[Rule('required')]
    public $direccion;

    #[Rule('required')]
    public $telefono;

    public $operadorId ='';
    public $modalE = false;

    public function edit($operadorId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->operadorId = $operadorId;
        $operador = Operadore::find($operadorId);

        
        $this->name = $operador->name;
        $this->nit = $operador->nit;
        $this->direccion = $operador->direccion;
        $this->telefono = $operador->telefono;
    }

    public function update()
    {
        $this->validate();
        
        $operador = Operadore::find($this->operadorId);

        $operador->update(
            $this->only('name', 'nit', 'direccion', 'telefono')
        );
        
        $this->reset();
    }
}
