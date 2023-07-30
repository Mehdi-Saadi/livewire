<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8'
    ];

    public function register()
    {
        $this->validate();

        dd($this->email);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
