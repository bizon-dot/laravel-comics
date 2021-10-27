@extends('app')

@section('title', 'Homepage')

@section('content')
    @foreach ($comics as $comic)
        <p>{{$comic["title"]}}</p>
    @endforeach
@endsection