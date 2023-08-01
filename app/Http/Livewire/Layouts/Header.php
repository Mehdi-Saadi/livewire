<?php

namespace App\Http\Livewire\Layouts;

use App\Models\Article;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Header extends Component
{
    protected $listeners = [
        'forTest' => 'myTest'
    ];

    public function myTest(Article $article)
    {
        Log::info('run myTest in header: ' . $article->title);
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
