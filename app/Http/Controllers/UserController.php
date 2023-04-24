<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 
class UserController extends Controller
{
    
        
        public function show(){
            $users = User::get();
            return view('admin.users',compact('users'));


        }

        
        public function index()
        {
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->usertype !== 'admin') {
                    abort(403);
                }
                $users = User::get();
                return view('admin.users', compact('users'));
            } else {
                return redirect('/login');
            }
        }
        
        public function destroy(User $user)
        {
            $user->delete();
            return redirect()->route('home.index')->with('success', 'User deleted successfully');
        }
        public function update(Request $request)
        {
            $user = Auth::user();
    
            $user->nom = $request->input('nom');
            $user->prenom = $request->input('prenom');
            $user->email = $request->input('email');
            $user->numtel = $request->input('numtel');
    
            $user->save();
    
            return redirect()->back()->with('success', 'Votre profil a été mis à jour.');
        }
        public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::user();
    $current_password = $user->password;

    if (Hash::check($request->input('current_password'), $current_password)) {
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    } else {
        return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }
}
public function delete(User $user)
{
    $user->delete();
    return redirect()->route('clients')->with('success', 'Your account has been deleted.');
}

public function updatePicture(Request $request)
{
    $request->validate([
        'picture' => 'required|image|max:2048',
    ]);

    $user = auth()->user();

    if ($request->hasFile('picture')) {
           

        $file = $request->file('picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('storage/profile_pics/',$filename);
        $user->profilep = $filename;
    }
    else{
        $user->profilep ='storage/profile_pics/default.jpg';


    }
    $user->save();
    
   

    return redirect('/')->with('success', "Account successfully registered.");
}
public function showClients()
{
    $clients = DB::table('users')->where('usertype', 'client')->get();
    return view('clients', ['clients' => $clients]);
}
public function remove($id)
{
    // Logic to delete user from the database
    DB::table('users')->where('id', $id)->delete();
    return redirect('/clients')->with('success', 'User has been deleted successfully.');
}
public function myControllerMethod()
{
    $users = User::select('email', 'nom', 'created_at')->get();
    return view('home.index', ['users' => $users]);
}



}

        
