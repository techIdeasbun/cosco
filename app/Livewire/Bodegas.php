<?php

namespace App\Livewire;

use App\Livewire\Forms\Bodegas\FormBodegaCreate;
use App\Livewire\Forms\Bodegas\FormBodegaEdit;
use App\Models\Bodega;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Bodegas extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormBodegaCreate $bodegaCreate;
    public FormBodegaEdit $bodegaEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function save()
    {
        $this->bodegaCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nueva Bodega Creado');
    }

    public function edit($bodegaId)
    {
        $this->resetValidation();
        $this->bodegaEdit->edit($bodegaId);
        $this->dispatch('operador-created', 'Bodega Actualizado');
    }

    public function update()
    {
        $this->basculaEdit->update();
    }

    public function destroy($basculaId)
    {
        $bodega = Bodega::find($basculaId);
        $bodega->delete();        
        $this->dispatch('operador-created', 'Bascula Eliminado');
    }
    
    
    public function render()
    {
        $bodegas = Bodega::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.bodegas', compact('bodegas'));
    }
}
