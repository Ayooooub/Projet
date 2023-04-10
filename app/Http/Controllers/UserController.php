<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

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
            return redirect()->route('homee')->with('success', 'Your account has been deleted.');
        }

        public function updatePicture(Request $request)
        {
            $request->validate([
                'picture' => 'required|image|max:2048',
            ]);

            $user = auth()->user();

            if ($request->hasFile('picture')) {
                

                $file = $request->file('profile_pic');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('profile_pics', $filename, 'public');
                $user->profilep = $filename;
            }
            else{
                $user->profilep ='default.jpg';


            }
            $user->save();
            
        

            return redirect('/')->with('success', "Account successfully registered.");
        }
}

        