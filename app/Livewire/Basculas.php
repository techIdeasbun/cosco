<?php

namespace App\Livewire;

use App\Livewire\Forms\Bascula\FormBasculaCreate;
use App\Livewire\Forms\Supervision\FormSupervisionUpdate;
use Livewire\Component;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Models\Bascula;

class Basculas extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormBasculaCreate $basculaCreate;
    public FormSupervisionUpdate $basculaEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function save()
    {
        $this->basculaCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nueva SBascula Creado');
    }

    public function edit($basculaId)
    {
        $this->resetValidation();
        $this->basculaEdit->edit($basculaId);
        $this->dispatch('operador-created', 'Bascula Actualizado');
    }

    public function update()
    {
        $this->basculaEdit->update();
    }

    public function destroy($basculaId)
    {
        $bascula = Bascula::find($basculaId);
        $bascula->delete();        
        $this->dispatch('operador-created', 'Bascula Eliminado');
    }
    
    
    public function render()
    {
        $basculas = Bascula::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.basculas', compact('basculas'));
    }
}
