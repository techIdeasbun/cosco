<?php

namespace App\Livewire;

use App\Livewire\Forms\user\usersCreate;
use App\Livewire\Forms\user\usersEdit;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Usuarios extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public usersCreate $usersCreate;
    public usersEdit $usersEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar;

    public function render()
    {
        $users = User::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.usuarios', compact('users') );
    }

    public function save()
    {
        $this->usersCreate->save();
        $this->resetPage('');

        $this->dispatch('post-created', 'Nuevo Articulo Creado');
    }

    public function edit($userId)
    {
        $this->resetValidation();
        $this->usersEdit->edit($userId);
        $this->dispatch('post-created', 'Articulo Actualizado');
    }

    public function update($id)
    {
        $this->usersEdit->update();
    }

    public function destroy($userId)
    {
        $user = User::find($userId);
        $user->delete();        
        $this->dispatch('post-created', 'Articulo Eliminado');
    }
    
}
