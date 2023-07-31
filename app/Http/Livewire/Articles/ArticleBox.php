<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class ArticleBox extends Component
{
    public Article $article;

    public function like()
    {
        $this->article->increment('like');
    }
    public function render()
    {
        return view('livewire.articles.article-box');
    }
}
