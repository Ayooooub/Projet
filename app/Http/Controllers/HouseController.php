<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\House;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function index(){
        $houses = House::all();
        return view('searchpages.buy',compact('houses'));
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
    
   
    // $validator = Validator::make($request->all(), [
        //     'surface' => 'required|numeric',
        //     'adresse' => 'required|string',
        //     'prix' => 'required|numeric',
        //     'type' => 'required|in:Appartement,Maison',
           
        // ]);
    
        // $house =new House;
        // if ($request->filled('Maison-checkbox')) 
        //     $house->type = $request->input('Maison-checkbox');
        // else if($request->filled('App-checkbox'))
        //     $house->type = $request->input('App-checkbox');
        
        // if ($request->filled('Vente')) 
        //     $house->type_annonce = $request->input('Vente');
        // else if($request->filled('Location'))
        //     $house->type_annonce = $request->input('Location');
        
        // $house->surface = $request->input('surface');
        // $house->adresse = $request->input('adresse');
        // $house->prix = $request->input('prix');
        // $house->nbpiece = $request ->input('nbpiece');
        
        // $house->save();

       
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $path = Storage::putFile('public/images', $image);
        //         $image = new Image(['path' => $path]);
        //         $house->images()->save($image);
        //     }
        // }
        
        
        
       
       return redirect()->route('searchpages.buy');
    }

    public function rentsearch(Request $request)
    {
        $query = House::query();
        $query->where('type_annonce', 'LIKE','Location');

        $adresse = $request->input('adresse');
        if ($request->filled('adresse')) {
            $query->where('adresse', 'LIKE', '%' . $adresse . '%');
        }
    
        $surf = $request->input('surface');
        if ($request->filled('surface')) {
            $query->where('surface', '>=', $surf);
        }
 
        $maxPrice = $request->input('price');
        if ($request->filled('price')) {
            $query->where('prix', '<=', $maxPrice);
        }

        if ($request->filled('rent_appartement') && $request->filled('rent_maison')) {
            $query->where(function($query) {
                $query->where('type', 'Appartement')->orWhere('type', 'Maison');
            });
        } 
        
        elseif ($request->filled('rent_appartement')) {
            $query->where('type', 'Appartement');
        }
        
        elseif ($request->filled('rent_maison')) {
            $query->where('type', 'Maison');
        }
       
        
        
        
        
        
        

        $houses = $query->get();
        
        return view('searchpages.buy', compact('houses'));
    }
  
    public function buysearch(Request $request)
    {
        $query = House::query();
        $query->where('type_annonce', 'Vente');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'));
        
        $adresse = $request->input('adresse');
        if ($request->filled('adresse')) {
            $query->where('adresse', 'LIKE', '%' . $adresse . '%');
        }
    
        $surf = $request->input('surface');
        if ($request->filled('surface')) {
            $query->where('surface', '>=', $surf);
        }
    
        $maxPrice = $request->input('price');
        if ($request->filled('price')) {
            $query->where('prix', '<=', $maxPrice);
        }
    
        if ($request->filled('buy_appartement') && $request->filled('buy_maison')) {
            $query->where(function($query) {
                $query->where('type', 'Appartement')->orWhere('type', 'Maison');
            });
        } 
        elseif ($request->filled('buy_appartement')) {
            $query->where('type', 'Appartement');
        } 
        elseif ($request->filled('buy_maison')) {
            $query->where('type', 'Maison');
        }
        
        
        
        
        
        
        
        $houses = $query->get();
    
        return view('searchpages.buy', compact('houses'));
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
        $house_id = $request->input('house_id');
        $user = Auth::user();
        
        if ($user->favoriteHouses->contains($house_id)) {
            // House already favorited, remove it
            $user->favoriteHouses()->detach($house_id);
            return response()->json(['status' => 'success', 'message' => 'House removed from favorites.']);
        } else {
            // House not favorited, add it
            $user->favoriteHouses()->attach($house_id);
            return response()->json(['status' => 'success', 'message' => 'House added to favorites.']);
        }
    }


}