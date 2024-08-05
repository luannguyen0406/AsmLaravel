@extends('client.layout.master')
@section('conten')
    <div class="container">
        <div class="content">
            @include('client.layout.items.detail')
        </div>
        <div class="column">
            @include('client.layout.items.new')
        </div>
        <br class="clear" />
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
