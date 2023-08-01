<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'forTest' => 'handleTest'
    ];

    public function handleTest($value)
    {
        Log::info('run handletest in index articles: ' . $value);
    }

    public function render()
    {
        return view('livewire.articles.index', [
            'articles' => Article::latest()->paginate(5),
        ]);
    }
}
