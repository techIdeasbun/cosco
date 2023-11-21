<?php

namespace App\Livewire\Forms\Transporte;

use App\Models\Transporte;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormTransporteCreate extends Form
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

    public $modalC = false;


    public function save()
    {     
        
        $this->validate();
        $transporte = Transporte::create($this->only('name', 'nit', 'direccion', 'telefono', 'calificaraccidente_id', 'calificardisponibilidade_id', 'calificarentrega_id'));
        $transporte->save();    
        $this->reset();       
        
    }
}
