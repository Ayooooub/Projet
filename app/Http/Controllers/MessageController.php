<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function sendMessage(Request $request, $id)
    {
        $house = House::findOrFail($id);

        $recipient_id = DB::table('users')->where('usertype', 'agent')->value('id');
        $sender_id = Auth::id();
        $subject = $request->input('prenom');
        $body = $request->input('body');
        
        $message = new Message;
        $message->house_id = $id;
        $message->sender_id = 1;
        $message->recipient_id =2;
        $message->subject = $subject;
        $message->body = $body;
        $message->save();
    
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    




}
