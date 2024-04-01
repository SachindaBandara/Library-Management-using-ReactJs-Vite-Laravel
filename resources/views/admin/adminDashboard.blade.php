@extends('user.layout')

@section('main')

@foreach($news as $item)
    {{ $item->title }}
@endforeach

@endsection
