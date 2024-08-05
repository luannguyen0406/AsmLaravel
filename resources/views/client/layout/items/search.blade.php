<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm tin tức</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        @if(isset($news))
            <div class="mt-4">
                <h2>Kết quả tìm kiếm</h2>
                @if($news->isEmpty())
                    <p>Không có tin tức nào phù hợp với từ khóa tìm kiếm.</p>
                    <a href="/"><button>Quay trở lại trang chủ</button></a>
                @else
                    @foreach ($news as $item)
                        <div class="news-item mb-3">
                            <h2 class="news-title">{{ $item->title }}</h2>
                            <img src="{{\Storage::url($item->image)  }}" alt="" width="100px" height="100px"/>
                            <p>{{ $item->description }}</p>
                            <a href="/detail/{{$item->id}}" class="btn btn-info">Đọc thêm</a>
                        </div>
                        <hr>
                    @endforeach
                @endif
            </div>
        @endif
    </div>
</body>
</html>