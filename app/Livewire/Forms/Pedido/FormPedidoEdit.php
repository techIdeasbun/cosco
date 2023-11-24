<?php

namespace App\Livewire\Forms\Pedido;

use App\Models\Pedido;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormPedidoEdit extends Form
{
    #[Rule('required')]
    public $cantidad;

    #[Rule('required')]
    public $namemn;

    #[Rule('required')]
    public $producto_id;

    public $pedidoId ='';
    public $modalE = false;

    public function edit($pedidoId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->pedidoId = $pedidoId;
        
        $pedido = Pedido::find($pedidoId);
        
        $this->cantidad = $pedido->cantidad;
        $this->namemn = $pedido->namemn;
        $this->producto_id = $pedido->producto_id;
        
        
    }

    public function update()
    {
        $this->validate();
        
        $pedido = Pedido::find($this->pedidoId);

        $pedido->update(
            $this->only('cantidad', 'namemn', 'producto_id')
        );
        
        $this->reset();
    }
}
