<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Image;
use App\Models\Building;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class SearchController extends Controller
{
    public function rentsearch(Request $request)
    {
        $query = House::query();
        $query->where('type_annonce', 'LIKE','Location');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;

        $buildingQuery = Building::query();
        $buildingQuery->where('type_annonce', 'LIKE', 'Location');
        $buildingQuery->select('*', DB::raw('(SELECT path FROM building_images WHERE building_id = buildings.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc');

        $adresse = $request->input('adresse');
        if ($request->filled('adresse')) {
            $query->where('adresse', 'LIKE', '%' . $adresse . '%');
            $buildingQuery->where('adresse', 'LIKE', '%' . $adresse . '%');
        }
    
        $surf = $request->input('surface');
        if ($request->filled('surface')) {
            $query->where('surface', '>=', $surf);
            $buildingQuery->where('surface', '>=', $surf);
        }
 
        $maxPrice = $request->input('price');
        if ($request->filled('price')) {
            $query->where('prix', '<=', $maxPrice);
            $buildingQuery->where('prix', '<=', $maxPrice);
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
        
        if (!$request->filled('rent_immeuble')) {
            $buildingQuery->getQuery()->whereRaw('1 = 0'); //empty the building query
        }
       
        $buildings = $buildingQuery->get();
        
       
       
        
        

       
        
        return view('searchpages.buy', compact('houses','buildings'));
    }
  
    public function buysearch(Request $request)
    {   
        $query = House::query();
        $query->where('type_annonce', 'LIKE','Vente');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;

        $buildingQuery = Building::query();
        $buildingQuery->where('type_annonce', 'LIKE', 'Vente');
        $buildingQuery->select('*', DB::raw('(SELECT path FROM building_images WHERE building_id = buildings.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc');

        $adresse = $request->input('adresse');
        if ($request->filled('adresse')) {
            $query->where('adresse', 'LIKE', '%' . $adresse . '%');
            $buildingQuery->where('adresse', 'LIKE', '%' . $adresse . '%');
        }
    
        $surf = $request->input('surface');
        if ($request->filled('surface')) {
            $query->where('surface', '>=', $surf);
            $buildingQuery->where('surface', '>=', $surf);
        }
 
        $maxPrice = $request->input('price');
        if ($request->filled('price')) {
            $query->where('prix', '<=', $maxPrice);
            $buildingQuery->where('prix', '<=', $maxPrice);
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
        
        if (!$request->filled('buy_immeuble')) {
            $buildingQuery->getQuery()->whereRaw('1 = 0'); //empty the building query
        }
       
        $buildings = $buildingQuery->get();
        
       
       
        
        

       
        
        return view('searchpages.buy', compact('houses','buildings'));  

}
}