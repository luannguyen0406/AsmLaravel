<div class="category-container">
    <h1>Danh mục: {{ $category->name }}</h1>
    @foreach ($posts as $item)
        <div class="news-item">
            <h2 class="news-title">{{ $item->title }}</h2>
        <img src="{{\Storage::url($item->image)  }}" alt="" width="200px" height="200px"/>
            <p class="news-views">Lượt xem: {{ $item->view }}</p>
            <p>{{ $item->description }}</p>
            <a href="/detail/{{$item->id}}">Đọc thêm</a>
        </div>
        <hr>
    @endforeach
</div>