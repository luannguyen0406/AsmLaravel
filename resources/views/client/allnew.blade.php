
@extends('client.layout.master')
<head>
    <title>{{$category->name}}</title>
</head>
@section('conten')
    <div class="container">
        <div class="content">
            @include('client.layout.items.category')
        </div>
    </div>
@endsection
@section('cont')
    <div id="hpage_cats">
        @include('client.layout.items.main')
    </div>
@endsection
@section('contee')
    <div class="container">
        @include('client.layout.items.trendingNew')
    </div>
@endsection

