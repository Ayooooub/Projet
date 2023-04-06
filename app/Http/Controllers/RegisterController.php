<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        
        $user = User::create($request->validated());
         auth()->login($user);
        if ($request->hasFile('profile_pic')) {
           

            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('profile_pics/',$filename);
            $user->profilep = $filename;
        }
        else{
            $user->profilep ='default.jpg';


        }
        $user->save();
        
       

        return redirect('/')->with('success', "Account successfully registered.");
    }
}