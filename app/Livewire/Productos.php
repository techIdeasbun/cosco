<?php

namespace App\Livewire;

use App\Livewire\Forms\Productos\FormProductosCreate;
use App\Livewire\Forms\Productos\FormProductosEdit;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Productos extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormProductosCreate $productoCreate;
    public FormProductosEdit $productoEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function save()
    {
        $this->productoCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nueva Producto Creadeo');
    }

    public function edit($productoId)
    {
        $this->resetValidation();
        $this->productoEdit->edit($productoId);
        $this->dispatch('operador-created', 'Producto Actualizado');
    }

    public function update()
    {
        $this->productoEdit->update();
    }

    public function destroy($productoId)
    {
        $producto = Producto::find($productoId);
        $producto->delete();        
        $this->dispatch('operador-created', 'Producto Eliinado');
    }
        
    public function render()
    {
        $productos = Producto::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.productos', compact('productos'));
    }
}
