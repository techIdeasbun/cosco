<?php

namespace App\Livewire;

use App\Livewire\Forms\user\usersCreate;
use App\Livewire\Forms\user\usersEdit;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;


class Usuarios extends Component
{
    use WithFileUploads;
    use WithPagination;

     //definimos unas variables
    public usersCreate $usersCreate;
    public usersEdit $usersEdit;

    
    public $modalc = false;
    public $modalE = false;

    public $buscar, $roles;

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function render()
    {
        $users = User::where('name', 'like','%'.$this->buscar.'%')->paginate(5);
        return view('livewire.usuarios', compact('users') );
    }

    public function save()
    {
        $this->usersCreate->save();
        $this->resetPage('');

        $this->dispatch('post-created', 'Nuevo Usuario Creado');
    }

    public function edit($userId)
    {
        $this->resetValidation();
        $this->usersEdit->edit($userId);
        $this->dispatch('post-created', 'AUsuario Actualizado');
    }

    public function update($id)
    {
        $this->usersEdit->update();
    }

    public function destroy($userId)
    {
        $user = User::find($userId);
        $user->delete();        
        $this->dispatch('post-created', 'Usuario Eliminado');
    }
    
}
