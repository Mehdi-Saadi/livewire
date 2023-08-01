<div>
    <div class="container">
        <livewire:layouts.header />
        <div class="row">
            <div class="col-12">
                <h3>Articles List</h3>

                @foreach($articles as $article)
                    <livewire:articles.article-box :article="$article" :key="$article->id"/>
                @endforeach
            </div>
        </div>
    </div>
</div>
