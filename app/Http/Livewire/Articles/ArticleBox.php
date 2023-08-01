<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ArticleBox extends Component
{
    public Article $article;

    protected $listeners = [
        'forTest'
    ];

    public function forTest($article)
    {
        Log::info('listenter in article box' . $article);
    }

    public function like()
    {
//        $this->article->increment('like');
//        $this->emit('forTest', $this->article->id);
        $this->dispatchBrowserEvent('show-notification', ['title' => 'hello mehdi', 'body' => 'this is body']);
    }
    public function render()
    {
        return view('livewire.articles.article-box');
    }
}
