<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function dbmessage()
    {
        $message_list = Message::all();

        return view('dbmessage.index', compact('message_list'));
    }

    public function form()
    {
        return view('form-request');
    }

    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'reqproduct' => 'required'
        ]);

        Message::create($validatedData);

        return redirect('home/')->with('success', 'Send request successfully');
    }

    public function delete($id)
    {
        $message = Message::findOrFail($id);

        $message->delete();
        
        return redirect('dbmessage/')->with('success', 'Request product has been deleted!');
    }
}
