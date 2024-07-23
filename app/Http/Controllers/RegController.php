<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;

class RegController extends Controller
{
    public function store()
    {
        return view('home');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);


        Auth::login($user);
        return redirect('/')->with('success', 'Вы зарегестрировались!');
    }

    public function login()
    {
        return view('home');
    }

    public function loginForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect('/')->with('success', 'Вы вошли в аккаунт!');
        } else {
            echo "Неверный логин или пароль!";
        }
    }



    public function message(Request $request)
    {
        $message = new Message();
        $message->app = request('app');
        $message->name = request('name');
        $message->email = request('email'); 
        $message->phone = request('phone');
        $message->message = request('message');
        $message->save();

        // dd($message);

        Message::create($request->all());
        $request->session()->flash('success', 'Вы отправили заявку!');
        return redirect()->route('posts.index');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
