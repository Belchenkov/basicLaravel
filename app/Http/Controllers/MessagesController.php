<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        // Create New Message
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();

        return redirect('/')->with('success', 'Message Send');
    }

    public function getMessages()
    {
        $messages = Message::all();
        $title = 'Messages';

        return view('messages', ['messages' => $messages, 'title' => $title]);
    }
}
