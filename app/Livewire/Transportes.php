<?php

namespace App\Livewire;

use App\Livewire\Forms\Transporte\FormTransporteCreate;
use App\Livewire\Forms\Transporte\FormTransporteEdit;
use App\Models\Calificaraccidente;
use App\Models\Calificardisponibilidade;
use App\Models\Calificarentrega;
use App\Models\Transporte;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Transportes extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public FormTransporteCreate $transporteCreate;
    public FormTransporteEdit $transporteEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar, $entregas, $disponibilidades, $accidentes;

    public function mount()
    {
        $this->entregas = Calificarentrega::all();
        $this->disponibilidades = Calificardisponibilidade::all();
        $this->accidentes = Calificaraccidente::all();
    }

    public function save()
    {
        $this->transporteCreate->save();
        $this->resetPage('');

        $this->dispatch('operador-created', 'Nuevo Transporte Creado');
    }

    public function edit($transporteId)
    {
        $this->resetValidation();
        $this->transporteEdit->edit($transporteId);
        $this->dispatch('operador-created', 'Transporte Actualizado');
    }

    public function update()
    {
        $this->transporteEdit->update();
    }

    public function destroy($transporteId)
    {
        $transporte = Transporte::find($transporteId);
        $transporte->delete();        
        $this->dispatch('operador-created', 'Transporte Eliminado');
    }
    
    public function render()
    {
        $transportes = Transporte::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.transportes',  compact('transportes'));
    }
}
