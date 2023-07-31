<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $foo;

    public function mount()
    {
        $this->foo = 1;
    }

    public function increment()
    {
        $this->foo += 1;
    }

    public function getBarProperty()
    {
        return $this->foo += 1;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
