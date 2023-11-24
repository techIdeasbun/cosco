<?php

namespace App\Livewire\Forms\Pedido;

use App\Models\Pedido;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormPedidoCreate extends Form
{
    #[Rule('required')]
    public $cantidad;
    
    #[Rule('required')]
    public $namemn;

    #[Rule('required')]
    public $producto_id;

    public $modalC = false;


    public function save()
    {     
        
        $this->validate();
        $pedido = Pedido::create($this->only('cantidad', 'namemn', 'producto_id'));
        $pedido->save();    
        $this->reset();       
        
    }
}
