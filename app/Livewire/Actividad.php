<?php

namespace App\Livewire;

use App\Livewire\Forms\Actividad\FormActividadCreate;
use App\Livewire\Forms\Actividad\FormActividadEdit;
use App\Models\Actividade;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Actividad extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormActividadCreate $actividadCreate;
    public FormActividadEdit $actividadEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function save()
    {
        $this->actividadCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nueva Actividad Creada');
    }

    public function edit($actividadId)
    {
        $this->resetValidation();
        $this->actividadEdit->edit($actividadId);
        $this->dispatch('operador-created', 'Actividad Actualizada');
    }

    public function update()
    {
        $this->actividadEdit->update();
    }

    public function destroy($actividadId)
    {
        $actividad = Actividade::find($actividadId);
        $actividad->delete();        
        $this->dispatch('operador-created', 'Actividad eliminada');
    }
    
    
    public function render()
    {
        $actividades = Actividade::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.actividad', compact('actividades'));
    }
}
