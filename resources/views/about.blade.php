@extends('app')

@section('title', 'About')

@section('content')
<section class="home">
    @foreach ($comics as $comic)
        <p>{{$comic["title"]}}</p>
    @endforeach
</section>
@endsection