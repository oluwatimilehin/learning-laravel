<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    //
    public function store(Request $request, Card $card){ //We are passing in the card object from our route call. Typehinting.
        $note = new Note($request->all());
        $note->user_id = 1;
        $card->addNote($note); //$request contains the form data
        return back();
    }
    public function edit(Note $note){
        return view('notes.edit', compact('note'));
    }
    public function update(Note $note, Request $request){
        $note->update($request->all());
        return back();
    }
}
