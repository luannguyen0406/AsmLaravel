<div id="featured_slide">
    <ul id="featurednews">
        @foreach ($p as $item)
                <li><img src="{{\Storage::url($item->image)  }}" alt="ảnh" />
                    <div class="panel-overlay">
                        <h2>{{$item->title}}</h2>
                        <p>{{$item->description}}<br />
                            <a href="/detail/{{$item->id}}">Đọc thêm &raquo;</a>
                        </p>
                    </div>
                </li>
        @endforeach
    </ul>
</div>
