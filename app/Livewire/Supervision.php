<?php

namespace App\Livewire;

use App\Livewire\Forms\Supervision\FormSupervisionCreate;
use App\Livewire\Forms\Supervision\FormSupervisionUpdate;
use App\Models\Supervisione;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Supervision extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormSupervisionCreate $supervisionCreate;
    public FormSupervisionUpdate $supervisionEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function save()
    {
        $this->supervisionCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nueva Supervision Creado');
    }

    public function edit($supervisionId)
    {
        $this->resetValidation();
        $this->supervisionEdit->edit($supervisionId);
        $this->dispatch('operador-created', 'Supervision Actualizado');
    }

    public function update()
    {
        $this->supervisionEdit->update();
    }

    public function destroy($supervisionId)
    {
        $supervision = Supervisione::find($supervisionId);
        $supervision->delete();        
        $this->dispatch('operador-created', 'Supervision Eliminado');
    }
    
    public function render()
    {
        $supervisiones = Supervisione::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.supervision',  compact('supervisiones'));
    }
}
