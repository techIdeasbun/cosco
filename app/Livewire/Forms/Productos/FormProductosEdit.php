<?php

namespace App\Livewire\Forms\Productos;

use App\Models\Producto;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormProductosEdit extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $calidad;

    public $productoId ='';
    public $modalE = false;

    public function edit($productoId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->productoId = $productoId;

        $producto = Producto::find($productoId);

        $this->calidad = $producto->calidad;
        $this->name = $producto->name;
        
    }

    public function update()
    {
        $this->validate();
        
        $producto = Producto::find($this->productoId);

        $producto->update(
            $this->only('name', 'calidad')
        );
        
        $this->reset();
    }
}
