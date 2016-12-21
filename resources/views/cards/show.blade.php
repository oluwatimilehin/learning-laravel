@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1> {{ $card->title }} </h1>

            <ul class="list-group">
                @foreach($card->note as $note)
                    <li class="list-group-item">  {{ $note->body }} </li>
                @endforeach
            </ul>
            <hr>
            <h3>Add a New Note </h3>
            <div class="form-group">
                <textarea name="body" id="" cols="30" rows="10" class="form-control"> </textarea>
            </div>

        </div>
    </div>

@endsection
