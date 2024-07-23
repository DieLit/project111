<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class UserMessageController extends Controller
{

    public function profile(Request $request)
    {
            $message = Messages::all();
            return view('profile', compact('message'));

    }

    public function message(Request $request)
    {
        $message = new Messages();
        $message->app = request('app');
        $message->name = request('name');
        $message->email = request('email'); 
        $message->phone = request('phone');
        $message->message = request('message');
        $message->save();

        Messages::create($request->all());
        $request->session()->flash('success', 'Вы отправили сообщение!');
        return redirect()->route('posts.index');
    }
    
}
