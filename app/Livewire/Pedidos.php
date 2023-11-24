<?php

namespace App\Livewire;

use App\Livewire\Forms\Pedido\FormPedidoCreate;
use App\Livewire\Forms\Pedido\FormPedidoEdit;
use App\Models\Pedido;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Pedidos extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormPedidoCreate $pedidoCreate;
    public FormPedidoEdit $pedidoEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar, $productos;

    public function mount()
    {
        $this->productos = Producto::all();
        
    }

    public function save()
    {
        $this->pedidoCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nuevo Pedido Creado');
    }

    public function edit($pedidoId)
    {
        $this->resetValidation();
        $this->pedidoEdit->edit($pedidoId);
        $this->dispatch('operador-created', 'Pedido Actualizado');
    }

    public function update()
    {
        $this->pedidoEdit->update();
        $this->resetPage('');
    }

    public function destroy($pedidoId)
    {
        $pedido = Pedido::find($pedidoId);
        $pedido->delete();        
        $this->dispatch('operador-created', 'Pedido eliminade');
    }
    
    public function render()
    {
        $pedidos = Pedido::where('id', 'like','%'.$this->buscar.'%')
                    ->orderBy('id', 'desc')
                    ->paginate(5);
        return view('livewire.pedidos', compact('pedidos'));
    }
}
