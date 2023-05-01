<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Land;
use App\Models\House;
use App\Models\Building;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index() 
    {   $user = auth()->user();
        
        $favoriteHouseIds = $user->favoriteHouses()->pluck('id')->toArray();

        $favorite_houses = $user->favoriteHouses()->with('images')->get();
        $favorite_lands = $user->favoriteLands()->with('images')->get();
        $favorite_buildings = $user->favoriteBuildings()->with('images')->get();

        $houses = House::all();
        $buildings = Building::all();
        $lands = Land::all();
 

        // $user_id = Auth::id();
        $messages = Message::where('recipient_id', 'sender_id')->orderBy('created_at', 'desc')->get();

    

        return view('home.index',compact('favorite_houses','favorite_buildings','favorite_lands','houses','buildings','lands','messages'));
    }
    
}