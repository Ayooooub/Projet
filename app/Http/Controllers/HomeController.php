<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index() 
    {   $user = auth()->user();
        $favorite_houses = $user->favoriteHouses()->with('images')->get();
        $favorite_lands = $user->favoriteLands()->with('images')->get();
        $favorite_buildings = $user->favoriteBuildings()->with('images')->get();
        return view('home.index',compact('favorite_houses','favorite_buildings','favorite_lands'));
    }
    public function indexx() 
    {   $user = auth()->user();
        $favorite_buildings = $user->favoriteBuildings()->with('images')->get();
        $favorite_lands = $user->favoriteLands()->with('images')->get();
        $favorite_houses = $user->favoriteHouses()->with('images')->get();
        return view('home.indexx',compact('favorite_houses','favorite_buildings','favorite_lands'));
    }
}