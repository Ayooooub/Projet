<?php

namespace App\Http\Controllers;
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

   public function store(Request $request){
        
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
    if ($request->filled('balcon'))             $house->balcon = true;  
    if ($request->filled('cuisine_equipee'))    $house->cuisine = true;
    if ($request->filled('balcon'))             $house->balcon = true;  

    
    $house->save();
    foreach ($request->file('images') as $image) {
        $filename = time() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs('public/images', $filename);
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

        if ($request->filled('building_types')) {
            $buildingTypes = $request->input('building_types');
            $query->whereIn('building_type', [$buildingType]);

        }
        
        
        $houses = $query->get();
        
        return view('searchpages.buy', compact('houses'));
    }
  
    public function buysearch(Request $request)
    {
        $query = House::query();
        $query->where('type_annonce', 'LIKE','Vente');
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
    
        $houses = $query->get();
    
        return view('searchpages.buy', compact('houses'));
    } 
    
    public function show($id)
    {
        $house = House::findOrFail($id);
        $images = $house->images;
        return view('searchpages.house', compact('house', 'images'));

    }

}