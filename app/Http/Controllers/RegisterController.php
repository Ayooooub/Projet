<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
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
        $user->adresse=$request->input('adresse');
        auth()->login($user);
    
        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('profile_pics', $filename, 'public');
            $user->profilep = $filename;
        }
        else {
            $user->profilep = 'default.jpg';
        }
        
        $user->save();
        return redirect('/')->with('success', "Account successfully registered.");
    }
    public function register1(RegisterRequest $request) 
{
    $user = User::create($request->validated());
    // $user->prenom = $request->input('prenom');
    // $user->nom = $request->input('nom');
    // $user->email = $request->input('email');
    // $user->password = Hash::make($request->input('password'));
    // $user->adresse=$request->input('adresse');
    // $user->numtel = $request->input('numtel');
    $user->usertype ='agent';
    $user->save();
    return redirect('/')->with('success', 'Agent ajouté avec succès!'); 
}
}