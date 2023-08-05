<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $avatar;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'avatar' => 'required|image|max:1024',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function register()
    {
        $validatedData = $this->validate();

        $validatedData['password'] = bcrypt($this->password);
        $validatedData['avatar'] = $this->handleAvatarUpload();
        User::create($validatedData);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }

    private function handleAvatarUpload()
    {
        $year = now()->year;
        $month = now()->month;
        $day = now()->day;

        $dir = "avatars/$year/$month/$day";
        $name = rand(10000, 99999) . '_' . $this->avatar->getClientOriginalName();

        $this->avatar->storeAs($dir, $name);

        return "$dir/$name";
    }
}
