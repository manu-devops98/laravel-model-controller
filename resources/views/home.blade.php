@extends('layout.base')

@section('Title')
    Home
@endsection

@section('content')
<div class="container">
    @foreach ($movie as $singleMovie)
    <div class="card">
        <h1>Titolo: <span>{{$singleMovie->title}}</span></h1>
        <h3>Titolo Originale: <span>{{$singleMovie->original_title}}</span></h3>
        <h4>Nazionalità: <span>{{ $singleMovie->nationality}}</span></h4>
        <h5>Vote: <span>{{ $singleMovie->vote}}</span></h5>
    </div>
    @endforeach
</div>
@endsection