<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Image;
use App\Models\Building;
use App\Models\Land;


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

        $landQuery = Land::query();

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

        $landQuery->getQuery()->whereRaw('1 = 0'); // empty the land query
        $lands = $landQuery->get();
       
        
        

       
        
        return view('searchpages.buy', compact('houses','buildings','lands'));
    }
  
    public function buysearch(Request $request)
    {   
        $query = House::query();
        $query->where('type_annonce', 'LIKE','Vente');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;

        $buildingQuery = Building::query();
        $buildingQuery->where('type_annonce', 'LIKE', 'Vente');
        $buildingQuery->select('*', DB::raw('(SELECT path FROM building_images WHERE building_id = buildings.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc');

        $landQuery= Land::query();
        $landQuery->select('*', DB::raw('(SELECT path FROM land_images WHERE land_id = land.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc');

        $adresse = $request->input('adresse');
        if ($request->filled('adresse')) {
            $query->where('adresse', 'LIKE', '%' . $adresse . '%');
            $buildingQuery->where('adresse', 'LIKE', '%' . $adresse . '%');
            $landQuery->where('adresse', 'LIKE', '%' . $adresse . '%');
        }
    
        $surf = $request->input('surface');
        if ($request->filled('surface')) {
            $query->where('surface', '>=', $surf);
            $buildingQuery->where('surface', '>=', $surf);
            $landQuery->where('surface', '>=', $surf);
        }
 
        $maxPrice = $request->input('price');
        if ($request->filled('price')) {
            $query->where('prix', '<=', $maxPrice);
            $buildingQuery->where('prix', '<=', $maxPrice);
            $landQuery->where('prix', '<=', $maxPrice);
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
            $buildingQuery->getQuery()->whereRaw('1 = 0'); //if not checked empty the building query
        }

        if(!$request->filled('buy_terrain'))
            $landQuery->getQuery()->whereRaw('1 = 0'); //f not checked empty the land query
       
        $buildings = $buildingQuery->get();
        $lands = $landQuery->get();
       
       
        
        

       
        
        return view('searchpages.buy', compact('houses','buildings','lands'));  

}

    public function house_buy(Request $request){ //specific link route function from navbar 

        $query = House::query();
        $buildingQuery = Building::query();
        $landQuery = Land::query();

        $query->where('type_annonce', 'LIKE','Vente');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;
        $query->where('type', 'Maison');

        $landQuery->getQuery()->whereRaw('1 = 0');
        $buildingQuery->getQuery()->whereRaw('1 = 0');

        $buildings = $buildingQuery->get();
        $houses = $query->get();
        $lands = $landQuery->get();

        return view('searchpages.buy', compact('houses','buildings','lands'));  

    }

    public function house_rent(Request $request){
        
        $query = House::query();
        $buildingQuery = Building::query();
        $landQuery = Land::query();

        $query->where('type_annonce', 'LIKE','Location');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;
        $query->where('type', 'Maison');

        $landQuery->getQuery()->whereRaw('1 = 0');
        $buildingQuery->getQuery()->whereRaw('1 = 0');

        $buildings = $buildingQuery->get();
        $houses = $query->get();
        $lands = $landQuery->get();

        return view('searchpages.buy', compact('houses','buildings','lands'));  
    }

    
    public function appartement_buy(Request $request){ //specific link route function from navbar 

        $query = House::query();
        $buildingQuery = Building::query();
        $landQuery = Land::query();

        $query->where('type_annonce', 'LIKE','Vente');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;
        $query->where('type', 'Appartement');
    
        $landQuery->getQuery()->whereRaw('1 = 0');
        $buildingQuery->getQuery()->whereRaw('1 = 0');

        $buildings = $buildingQuery->get();
        $houses = $query->get();
        $lands = $landQuery->get();

        return view('searchpages.buy', compact('houses','buildings','lands'));  
    
    
    }

    public function appartement_rent(Request $request){ //specific link route function from navbar 

       
        $query = House::query();
        $buildingQuery = Building::query();
        $landQuery = Land::query();

        $query->where('type_annonce', 'LIKE','Location');
        $query->select('*', DB::raw('(SELECT path FROM images WHERE house_id = houses.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;
        $query->where('type', 'Appartement');

        $landQuery->getQuery()->whereRaw('1 = 0');
        $buildingQuery->getQuery()->whereRaw('1 = 0');

        $buildings = $buildingQuery->get();
        $houses = $query->get();
        $lands = $landQuery->get();

        return view('searchpages.buy', compact('houses','buildings','lands'));  
    }

    public function building_buy(Request $request){ //specific link route function from navbar 
        
        $query = House::query();
        $buildingQuery = Building::query();
        $landQuery = Land::query();



        $buildingQuery->where('type_annonce', 'LIKE','Vente');
        $buildingQuery->select('*', DB::raw('(SELECT path FROM building_images WHERE building_id = buildings.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;
        
        
        $landQuery->getQuery()->whereRaw('1 = 0');
        $query->getQuery()->whereRaw('1 = 0');

        $buildings = $buildingQuery->get();
        $houses = $query->get();
        $lands = $landQuery->get();

        return view('searchpages.buy', compact('houses','buildings','lands'));  
    }


    public function building_rent(Request $request){ //specific link route function from navbar 
        
        $query = House::query();
        $buildingQuery = Building::query();
        $landQuery = Land::query();



        $buildingQuery->where('type_annonce', 'LIKE','Location');
        $buildingQuery->select('*', DB::raw('(SELECT path FROM building_images WHERE building_id = buildings.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;
        
        
        $landQuery->getQuery()->whereRaw('1 = 0');
        $query->getQuery()->whereRaw('1 = 0');

        $buildings = $buildingQuery->get();
        $houses = $query->get();
        $lands = $landQuery->get();

        return view('searchpages.buy', compact('houses','buildings','lands'));  
    }

    public function land_buy(Request $request){ //specific link route function from navbar 
        
        $query = House::query();
        $buildingQuery = Building::query();
        $landQuery = Land::query();



       
        $landQuery->select('*', DB::raw('(SELECT path FROM land_images WHERE land_id = land.id ORDER BY id ASC LIMIT 1) as image_url'))->orderBy('created_at', 'desc'); // add orderBy clause;
        
        
        $buildingQuery->getQuery()->whereRaw('1 = 0');
        $query->getQuery()->whereRaw('1 = 0');

        $buildings = $buildingQuery->get();
        $houses = $query->get();
        $lands = $landQuery->get();

        return view('searchpages.buy', compact('houses','buildings','lands'));  
    }


}