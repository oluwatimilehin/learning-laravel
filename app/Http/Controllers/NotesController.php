<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    //
    public function store(Request $request, Card $card){ //We are passing in the card object from our route call. Typehinting.
        $note = new Note(['body'=>$request->body]);
        $card->addNote($note);
        return back();
    }
}
