<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\House;
use App\Models\Building;
use App\Models\Land;
use App\Models\Image;
use App\Models\Message;
class HouseController extends Controller
{
    public function index(){
        $houses = House::all();
        $buildings = Building::all();
        $lands = Land::all();
        return view('searchpages.buy',compact('houses','buildings','lands'));
   }
   public function properties(){
    $houses = House::all();
    $buildings = Building::all();
    $lands = Land::all();
    return view('admin.properties',compact('houses','buildings','lands'));
}

public function all(){
    $houses = House::all();
    $buildings = Building::all();
    $lands = Land::all();
    return view('all',compact('houses','buildings','lands'));
}

   

   public function store(Request $request){
        
    $house =new House;
    
    //radio buttons : 

    $house->type = $request->input('type_immobilier');

    $validatedData = $request->validate([
        'type_immobilier' => 'required|in:Appartement,Maison,Terrain,Immeuble',
    ]);
    
       
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

    $house->user_id = Auth::id();
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


  
  
    
    public function show($id)
    {
        $house = House::findOrFail($id);
        $images = $house->images;
        return view('searchpages.house', compact('house', 'images'));

    }
    public function showannonce($id)
{
    $house = House::findOrFail($id);
    $images = $house->images; // get all images for the house
    return view('danonce', compact('house', 'images'));
}

    public function property1()
    {
        $houses = House::all(); // Fetch houses data from the database
        return view('property1', ['houses' => $houses]); // Pass houses data to the 'index' view
        
       
    }
    public function showHouse($id)
    {
        $house = House::findOrFail($id); // retrieve house data by ID
        return view('danonce', compact('house')); // pass house data to the view
    }
    
    // Retrieve the count of houses with type "maison" from your database

    public function houseslist()
    {
        $houses = House::where('accepted', 0)->get();
        return view('annonce', ['houses' => $houses]);

    }
    
    public function Accepter(Request $request)
{
    $house = House::find($request->id);
    if ($request->has('accept')) {
        $house->accepted = 1;
        $house->save();
    }
    return redirect()->route('houses.list');

}
public function toggleFavorite(Request $request)
{
    $house_id = $request->input('house_id');
    $user = Auth::user();
    
    if ($user->favoriteHouses->contains($house_id)) {
        // House already favorited, remove it
        $user->favoriteHouses()->detach($house_id);
        return response()->json(['status' => 'success', 'message' => 'Maison supprimée des favoris.']);
    } else {
        // House not favorited, add it
        $user->favoriteHouses()->attach($house_id);
        return response()->json(['status' => 'success', 'message' => 'Maison ajoutée aux favoris.']);
    }
}

    public function showed($id)
    {
        $house = House::findOrFail($id);
        $images = $house->images;
        return view('annonce', compact('house', 'images'));

    }
    public function destroy($id)
    {
        $house = House::findOrFail($id); // Find the house by ID or throw a 404 error if it doesn't exist
        $house->delete(); // Delete the house from the database
        return redirect()->back()->with('success', 'La maison a été supprimée avec succès.'); // Redirect back to the previous page with a success message
    }
   
  
    
    
   
}