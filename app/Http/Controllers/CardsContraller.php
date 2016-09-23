<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

use App\Http\Requests;

class CardsContraller extends Controller
{
     public function index()
     {
     	$cards=\DB::table('cards')->get();
          dd($cards);

     	// $cards=Card::all();

     	return view('cards.index', compact('cards'));
     }


     public function show($card){

     	return $card;
     }

}
