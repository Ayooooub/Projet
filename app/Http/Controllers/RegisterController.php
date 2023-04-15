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
    $userInput = $request->validated();
    $userInput['nom'] = ucfirst($userInput['nom']); // Capitalize first letter of name
    $userInput['prenom'] = ucfirst($userInput['prenom']);
    $user = User::create($userInput);
    auth()->login($user);

    if ($request->hasFile('profile_pic')) {
        $file = $request->file('profile_pic');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('profile_pics', $filename, 'public');
        $user->profilep = $filename;
    } else {
        $user->profilep = 'default.jpg';
    }

    $user->save();
    return redirect('/')->with('success', "Account successfully registered.");
}

    
}