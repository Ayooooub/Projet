<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\House;
use App\Models\Building;
use App\Models\Image;

class HouseController extends Controller
{
    public function index(){
        $houses = House::all();
        $buildings = Building::all();
        
        return view('searchpages.buy',compact('houses','buildings'));
   }

   public function store(Request $request){  //save function
        
    $house =new House;
    
    //radio buttons : 

    $house->type = $request->input('type_immobilier');
       
    $house->type_annonce = $request->input('type_annonce');
    
    $house->meublé = $request->input('meuble');

    //input fields :

    $house->surface = $request->input('surface');
    $house->adresse = $request->input('adresse');
    $house->prix = $request->input('prix');
    $house->nbpiece = $request ->input('nbpiece');
    $house->salle_bain = $request->input('bain');
    $house->annee_construction = $request->input('annee_const');
    
    //checkboxes :

    if ($request->filled('balcon'))             $house->balcon = true;
    if ($request->filled('garage'))             $house->garage = true; 
   
    if ($request->filled('cuisine_equipee'))    $house->cuisine = true;
    if ($request->filled('ascenceur'))              $house->ascenceur = true;  

    
    $house->save();
    foreach ($request->file('images') as $image) {
        $filename = time() . '_' . $image->getClientOriginalName();
        
        $path = $image->storeAs('house_images', $filename, 'public');
        $house->images()->create(['path' => $filename]);
    }
    
       
       return redirect()->route('searchpages.buy');
    }

    
    public function show($id)  //detailed house info
    {   
        $house = House::findOrFail($id);
        
        $images = $house->images;
        return view('searchpages.house', compact('house', 'images'));

    }

   

   
    public function filter(Request $request)
    {
        $filter = $request->input('filter');

        // Get the houses based on the filter
        $houses = House::query();

        if ($filter) {
            $houses->where('type', $filter);
        }

        $houses = $houses->get();

        // Return the filtered houses as HTML
        return view('houses.index', compact('houses'))->render();
    }
    public function toggleFavorite(Request $request)
{
    $favorited_id = $request->input('unit_id');
    $favorited_type = $request->input('unit_type');
    $user = Auth::user();

    // Check the favorited type and use the corresponding relationship method
    if ($favorited_type == 'Maison' || $favorited_type == 'Appartement') {
        $favorites = $user->favoriteHouses();
    } else {
        $favorites = $user->favoriteBuildings();
    }

    if ($favorites->where('favorite_houses.id', $favorited_id)->exists()) {
        // Item already favorited, remove it
        $favorites->detach($favorited_id);

        return response()->json(['status' => 'success', 'message' => 'Item removed from favorites.']);
    } else {
        // Item not favorited, add it
        $favorites->attach($favorited_id);

        return response()->json(['status' => 'success', 'message' => 'Item added to favorites.']);
    }
}

    


}