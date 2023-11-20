<?php

namespace App\Livewire\Forms\user;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

use function Laravel\Prompts\password;

class usersCreate extends Form
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

    // #[Rule('required')]
    public $password;

    public $modalC = false;


    public function save()
    {     
        $this->password = bcrypt('password');
        $this->validate();
        $user = User::create($this->only('name', 'email', 'direccion', 'telefono', 'identificacion', 'password'));
        $user->roles()->attach($this->role);
        $user->save();    
        $this->reset();       
        
    }
}
