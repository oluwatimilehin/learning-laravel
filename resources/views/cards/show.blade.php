@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1> {{ $card->title }} </h1>

            <ul class="list-group">
                @foreach($card->note as $note)
                    <li class="list-group-item"> <a href="/notes/{{$note->id}}/edit">  {{ $note->body }} </a>
                    <a href="#" class="pull-right"> {{$note->user->name }}</a>
                    </li>

                @endforeach
            </ul>
            <hr>
            <h3>Add a New Note </h3>
            <form method="POST" action=/cards/{{$card->id}}/notes>
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="" cols="30" rows="5" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"> Add Note</button>
                </div>
            </form>
            @if(count($errors))
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            @endif
        </div>
    </div>

@endsection
