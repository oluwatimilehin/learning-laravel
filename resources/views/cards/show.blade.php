@extends('layout')

@section('content')
    <h1> {{ $card->title }} </h1>

    @foreach($card->note as $note)
        <p>  {{ $note->body }} </p>
    @endforeach

@endsection
