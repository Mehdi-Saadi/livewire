<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class Header extends Component
{
    public $article;

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
