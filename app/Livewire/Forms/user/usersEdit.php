<?php

namespace App\Livewire\Forms\user;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class usersEdit extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required|email')]
    public $email;

    #[Rule('required')]
    public $direccion;

    #[Rule('required')]
    public $telefono;

    #[Rule('required')]
    public $identificacion;
    
    #[Rule('required')]
    public $role;
    
    public $userId ='';
    public $modalE = false;

    public function edit($userId)
    {
        //$this->resetValidation();
        $this->modalE = true;
        $this->userId = $userId;
        $user = User::find($userId);

        
        $this->name = $user->name;
        $this->email = $user->email;
        $this->direccion = $user->direccion;
        $this->telefono = $user->telefono;
        $this->identificacion = $user->identificacion;
    }

    public function update()
    {
        $this->validate();
        
        $user = User::find($this->userId);

        $user->update(
            $this->only('name', 'email', 'direccion', 'telefono', 'identificacion')
        );

        $user->roles()->sync($this->role);
        
        $this->reset();
    }
}
