<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Building;
use App\Models\Building_Image;


class BuildingController extends Controller
{
    public function store(Request $request){  //save function
        
        $building =new Building;
        
        //radio buttons : 
    
       
           
        $building->type_annonce = $request->input('type_annonce');
        
       
    
        //input fields :
    
        $building->surface = $request->input('surface');
        $building->adresse = $request->input('adresse');
        $building->prix = $request->input('prix');

        $building->nb_etage = $request ->input('nbetage');
        
        $building->annee_construction = $request->input('annee_const');
        
        //checkboxes :
    
        if ($request->filled('balcon'))             $building->balcon = true;
        if ($request->filled('garage'))             $building->garage = true; 
       
      
        if ($request->filled('ascenceur'))              $building->ascenceur = true;  
    
        
        $building->save();
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            
            $path = $image->storeAs('building_images', $filename, 'public');
            $building->images()->create(['path' => $filename]);
        }
        
           
           
           return redirect()->route('searchpages.buy');
        }
    
    }