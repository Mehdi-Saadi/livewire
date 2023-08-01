<div>
    <h4>{{ $article->title }}</h4>
    <p>{{ $article->body }}</p>
    <div>
        like: {{ $article->like }}
        <button class="btn btn-danger btn-sm" wire:click="like">like</button>
    </div>
    <hr>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // setTimeout(() => {
            //     Livewire.emit('forTest');
            // }, 3000)
        });
    </script>
</div>
