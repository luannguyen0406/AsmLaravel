<ul class="latestnews">
    @foreach ($new as $item)
    <li><img src="{{\Storage::url($item->image)}}" alt="" width="100px" height="100px"/>
        <p><strong><a href="/detail/{{$item->id}}">{{$item->title}}</a></strong>{{$item->description}}</p>
    </li>
        @endforeach
    
</ul>                                                                                                                           