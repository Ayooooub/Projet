<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(){
        $houses = House::all();
        return view('searchpages.buy',compact('houses'));
   }

   public function store(Request $request){
    
        $house =new House;
        if ($request->filled('Maison-checkbox')) 
            $house->type = $request->input('Maison-checkbox');
        else if($request->filled('App-checkbox'))
            $house->type = $request->input('App-checkbox');
            
        
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
    }
  

}