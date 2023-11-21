<?php

namespace App\Livewire;

use App\Livewire\Forms\Ciudad\FormCiudadCreate;
use App\Livewire\Forms\Ciudad\FormCiudadEdit;
use App\Models\Ciudade;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Ciudad extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormCiudadCreate $ciudadCreate;
    public FormCiudadEdit $ciudadEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function save()
    {
        $this->ciudadCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nueva ACiudad Creada');
    }

    public function edit($ciudadId)
    {
        $this->resetValidation();
        $this->ciudadEdit->edit($ciudadId);
        $this->dispatch('operador-created', 'Ciudad Actualizada');
    }

    public function update()
    {
        $this->ciudadEdit->update();
    }

    public function destroy($ciudadId)
    {
        $ciudad = Ciudade::find($ciudadId);
        $ciudad->delete();        
        $this->dispatch('operador-created', 'Ciudad eliminada');
    }
    
    public function render()
    {
        $ciudades = Ciudade::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.ciudad', compact('ciudades'));
    }
}
