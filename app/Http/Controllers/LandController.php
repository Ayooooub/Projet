<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Land;
use App\Models\House;
use App\Models\Building;
use App\Models\Land_Image;

class LandController extends Controller
{
    public function store(Request $request){  //save function
        
        $land =new Land;
        
        //radio buttons : 
    
       
           
        $land->type_annonce = 'Vente';  // vente par default
        
       
    
        //input fields :
    
        $land->surface = $request->input('surface');
        $land->adresse = $request->input('adresse');
        $land->prix = $request->input('prix');

        
        
        
        $land->save();
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            
            $path = $image->storeAs('land_images', $filename, 'public');
            $land->images()->create(['path' => $filename]);
        }
        
           
           
           return redirect()->route('searchpages.buy');
        }


        public function show($id)  //detailed house info
        {   
            $land = Land::findOrFail($id);
        
            $images = $land->images;
            return view('searchpages.land', compact('land', 'images'));

        }
        public function toggleFavorite(Request $request)
        {
            $land_id = $request->input('land_id');
            $user = Auth::user();
            
            if ($user->favoriteLands->contains($land_id)) {
                // land already favorited, remove it
                $user->favoriteLands()->detach($land_id);
                return response()->json(['status' => 'success', 'message' => 'Terrain supprimé des favoris.']);
            } else {
                // land not favorited, add it
                $user->favoriteLands()->attach($land_id);
                return response()->json(['status' => 'success', 'message' => 'Terrain ajouté aux favoris.']);
            }
        }
        public function indexxx()
        {
            $houses = House::all();
            $lands = Land::all();
            $buildings = Building::all();
        
            return view('annonce', compact('houses', 'lands', 'buildings'));
        }
        public function showland1(){
            $lands = Land::get();
            return view('admin.properties',compact('lands'));
        }
        public function AccepterL(Request $request)
        {
            $land = Land::find($request->id);
            if ($request->has('accept')) {
                $land->accepted = 1;
                $land->save();
            }
            return redirect()->route('houses.list');
        
        }
        public function landslist()
        {
            $lands = Land::where('accepted', 0)->get();
            return view('lannonce', ['lands' => $lands]);
    
        }
        public function destroy($id)
        {
            $lands = Land::findOrFail($id); // Find the house by ID or throw a 404 error if it doesn't exist
            $lands->delete(); // Delete the house from the database
            return redirect()->back()->with('success', 'La maison a été supprimée avec succès.'); // Redirect back to the previous page with a success message
        }
}