<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HouseController extends Controller
{
    public function index(){
        $houses = House::all();
        return view('searchpages.buy',compact('houses'));
   }

   public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'surface' => 'required|numeric',
            'adresse' => 'required|string',
            'prix' => 'required|numeric',
            'type' => 'required|in:Appartement,Maison',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
    
        $house =new House;
        if ($request->filled('Maison-checkbox')) 
            $house->type = $request->input('Maison-checkbox');
        else if($request->filled('App-checkbox'))
            $house->type = $request->input('App-checkbox');
        
        if ($request->filled('Vente')) 
            $house->type_annonce = $request->input('Vente');
        else if($request->filled('Location'))
            $house->type_annonce = $request->input('Location');
        
        $house->surface = $request->input('surface');
        $house->adresse = $request->input('adresse');
        $house->prix = $request->input('prix');
        $house->nbpiece = $request ->input('nbpiece');
       
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/houses/',$filename);
            $house->image = $filename;


        }
        $house->save();
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
        return view('searchpages.house', compact('house'));
    }

}