@extends('app')

@section('title', 'Homepage')

@section('content')
<section class="home">
    @foreach ($comics as $comic)
        <p>{{$comic["title"]}}</p>
    @endforeach
</section>
@endsection