<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Home extends Component
{
    public $foo = 0;

    public function mount()
    {
        Log::info('mount method');
    }

    public function hydrate()
    {
        Log::info('hydrate method');
    }

    public function dehydrate()
    {
        Log::info('dehydrate method');
    }

    public function increment()
    {
        $this->foo++;
    }

    public function render()
    {
        Log::info('render method');
        return view('livewire.home');
    }
}
