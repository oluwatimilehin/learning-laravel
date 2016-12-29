<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    //
    public function store(Request $request, Card $card){ //We are passing in the card object from our route call. Typehinting.
        $this->validate($request,[
            'body'=> 'required|min:10'
            ]);
        $note = new Note($request->all());
        $card->addNote($note, 1); //$request contains the form data
        return back();
    }
    public function edit(Note $note){
        return view('notes.edit', compact('note'));
    }
    public function update(Note $note,Request $request){
        $note->update($request->all());
        return redirect()->route('cards',[$note->card_id]);
    }
}
