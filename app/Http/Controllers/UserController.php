<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    
        
        public function show(){
            $users = User::get();
            return view('admin.users',compact('users'));


        }
    }
  

