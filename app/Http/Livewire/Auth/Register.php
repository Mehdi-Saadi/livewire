<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8'
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function register()
    {
        $validatedData = $this->validate();

        $validatedData['password'] = bcrypt($this->password);
        User::create($validatedData);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
