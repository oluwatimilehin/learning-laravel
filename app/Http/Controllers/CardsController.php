<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
  public function index()
  {
      $cards = Card::all();
      return view('cards.index',compact('cards'));
  }
  
       
}
