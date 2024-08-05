<div id="topbar">
    <div id="topnav">
        <ul>
            <li class="active"><a href="/">Trang chủ</a></li>
            @foreach ($menu as $item)
                <li>
                    <a href="/new/{{$item->id}}">{{$item->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div id="search">
        <form action="/search" method="GET">
            <input type="text" name="query" class="form-control mr-2" placeholder="Nhập từ khóa tìm kiếm" required>
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>
    <br class="clear" />
</div>
