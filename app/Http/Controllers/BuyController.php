<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;

class BuyController extends Controller
{
   public function index(){
        $house = Houses::all();
        return view('searchpages.buy',compact('house'));
   }
}
