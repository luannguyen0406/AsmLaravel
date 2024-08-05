<div class="news-container">
    <br>
    <h1 class="news-title"> Tiêu đề : {{ $p->title }}</h1>
    <p class="news-author">Tác giả: {{ $p->author }}</p>
    <p class="news-date">Ngày đăng: {{ $p->created_at }}</p>
    @if ($p->image)
        <img src="{{\Storage::url($p->image)  }}" alt="{{ $p->title }}" class="news-image" width="550px">
    @endif
    <p class="news-description">{{ $p->description }}</p>
    <div class="news-content">
        {!! nl2br(e($p->content)) !!}
    </div>
</div>
