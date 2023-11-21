<?php

namespace App\Livewire\Forms\Transporte;

use App\Models\Transporte;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormTransporteEdit extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $nit;

    #[Rule('required')]
    public $direccion;

    #[Rule('required')]
    public $telefono;

    #[Rule('required')]
    public $calificaraccidente_id;

    #[Rule('required')]
    public $calificardisponibilidade_id;

    #[Rule('required')]
    public $calificarentrega_id;

    public $transporteId ='';
    public $modalE = false;

    public function edit($transporteId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->transporteId = $transporteId;
        $transporte = Transporte::find($transporteId);

        
        $this->name = $transporte->name;
        $this->nit = $transporte->nit;
        $this->direccion = $transporte->direccion;
        $this->calificaraccidente_id = $transporte->calificaraccidente_id;
        $this->calificardisponibilidade_id = $transporte->calificardisponibilidade_id;
        $this->calificarentrega_id = $transporte->calificarentrega_id;
        $this->telefono = $transporte->telefono;
    }

    public function update()
    {
        $this->validate();
        
        $transporte = Transporte::find($this->transporteId);

        $transporte->update(
            $this->only('name', 'nit', 'direccion', 'telefono', 'calificaraccidente_id', 'calificardisponibilidade_id', 'calificarentrega_id')
        );
        
        $this->reset();
    }
}
