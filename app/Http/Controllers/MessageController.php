<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\User;
use App\Models\Message;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Retrieve the house based on the ID submitted in the form
        $house = House::find($request->input('house_id'));
    
        // Retrieve the agent ID based on the house address
        $agentId = $this->getAgentId($house);
    
        // Create a new message record in the database
        Message::create([
            'house_id' => $house->id,
            'agent_id' => $agentId,
            'client_name' => $request->input('client_name'),
            'client_email' => $request->input('client_email'),
            'client_phone' => $request->input('client_phone'),
            'message' => $request->input('message'),
            'preferred_contact_method' => $request->input('preferred_contact_method'),
        ]);
    
        // Redirect the user back to the house details page
        return redirect()->back()->with('success', 'Your message has been sent to the agent.');
    }
    
// public function index()
// {
//     // Fetch messages for the logged-in agent
//     $messages = Message::where('receiver_id', auth()->user()->id)
//                         ->with('sender')
//                         ->orderBy('created_at', 'desc')
//                         ->get();

//     // Return a view to display the messages
//     return view('home.index', compact('messages'));
// }


}
