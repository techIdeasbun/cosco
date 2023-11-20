<?php

namespace App\Livewire;

use App\Livewire\Forms\Operadore\FromOperadorCreate;
use App\Livewire\Forms\Operadore\FromOperadorUpdate;
use App\Models\Operadore;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Operadores extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FromOperadorCreate $operadorCreate;
    public FromOperadorUpdate $operadorEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function save()
    {
        $this->operadorCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nuevo Operador Creado');
    }

    public function edit($operadorId)
    {
        $this->resetValidation();
        $this->operadorEdit->edit($operadorId);
        $this->dispatch('operador-created', 'Operador Actualizado');
    }

    public function update()
    {
        $this->operadorEdit->update();
    }

    public function destroy($operadorId)
    {
        $operador = Operadore::find($operadorId);
        $operador->delete();        
        $this->dispatch('operador-created', 'Operador Eliminado');
    }
    public function render()
    {
        $operadores = Operadore::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.operadores', compact('operadores') );
    }
}
