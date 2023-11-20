<?php

namespace App\Livewire\Forms\Bascula;

use App\Models\Bascula;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormBasculaEdit extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $nit;

    #[Rule('required')]
    public $direccion;

    #[Rule('required')]
    public $telefono;

    public $basculaId ='';
    public $modalE = false;

    public function edit($basculaId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->basculaId = $basculaId;
        $bascula = Bascula::find($basculaId);

        
        $this->name = $bascula->name;
        $this->nit = $bascula->nit;
        $this->direccion = $bascula->direccion;
        $this->telefono = $bascula->telefono;
    }

    public function update()
    {
        $this->validate();
        
        $bascula = Bascula::find($this->basculaId);

        $bascula->update(
            $this->only('name', 'nit', 'direccion', 'telefono')
        );
        
        $this->reset();
    }
}
