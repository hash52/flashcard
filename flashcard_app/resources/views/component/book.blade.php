<div class="card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-header">作成者：{{ $book->user->name }}</div>
    <div class="card-body text-dark">
    <h5 class="card-title">{{ $book->title }}</h5>
    <p class="card-text">{{ $book->introduction }}</p>
    <p class="card-text"><small class="text-muted"><a href={{ route('books.show', $book) }}>詳細</a></small></p>
    {{ $slot }}
    </div>
</div>