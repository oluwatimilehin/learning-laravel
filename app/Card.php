<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    public function note(){
        return $this->hasMany(Note::class); //This is the relatonship between the Card and the Note
    }
    public function addNote(Note $note, $userid){
        $note->user_id = $userid;
        $this->note()->save($note);
    }
}
