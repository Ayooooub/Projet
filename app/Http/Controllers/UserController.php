<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth; 

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

}