<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body']; //This means we can mass assign it from the command line.

    //
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
