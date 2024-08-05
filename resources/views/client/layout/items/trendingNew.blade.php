<div class="content">
    <div id="hpage_latest">
        <h2>Xem thêm các tin tức nổi bật</h2>
        <ul>
            @foreach ($trending as $item)
            <li><img src="{{\Storage::url($item->image)  }}" alt="" width="190px" height="130px" />
                <p>{{$item->description}}</p>
                <p class="readmore"><a href="/detail/{{$item->id}}">Đọc thêm &raquo;</a></p>
            </li> 
            @endforeach 
        </ul>
        <br class="clear" />
    </div>
</div>
{{-- <div class="column">
    <div class="holder"><a href="#"><img src="/news-magazine/images/demo/OIP.jpg" alt="" width="300px" height="300px" /></a></div>
</div> --}}
<br class="clear" />