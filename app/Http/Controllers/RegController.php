<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => dd($request->name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        Auth::login($user);
        return redirect('/')->with('success', 'woo!');
    }
}
