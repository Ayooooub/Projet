<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;
use App\Models\House;
use App\Models\Building;

class PropertyController extends Controller
{
    public function index()
    {
        return view('annonce');
    }

    public function displayProperties()
    {
        $lands = Land::all();
        $houses = House::all();
        $buildings = Building::all();
        return view('annonce', compact('lands', 'houses', 'buildings'));
    }

    // Add other methods for property CRUD operations
}
