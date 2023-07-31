<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.articles.index', [
            'articles' => Article::latest()->paginate(5),
        ]);
    }
}
