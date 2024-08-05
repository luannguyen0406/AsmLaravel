<div class="fl_left">
    @foreach ($post as $p)
        {{-- <h2><a href="#">{{ $p->menu->name }} &raquo;</a></h2> --}}
        <img src="{{\Storage::url($p->image)  }}" alt="" width="100px" height="100px"/>
        <p><strong><a href="/detail/{{$p->id}}">{{ $p->title }}</a></strong></p>
        <p>{{ $p->description }}</p>
    @endforeach
</div>
<div class="fl_right">
    @foreach ($post as $p)
    {{-- <h2><a href="#">{{ $p->menu->name }} &raquo;</a></h2> --}}
    <img src="{{\Storage::url($p->image)  }}" alt="" width="100px" height="100px" />
    <p><strong><a href="#">{{ $p->title }}</a></strong></p>
    <p>{{ $p->description }}</p>
@endforeach
</div>
<br class="clear" />
