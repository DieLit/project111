<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;

class AdminController extends Controller
{
    public function show()
    {
        return view('brokereg');
    }

    public function users_create()
    {
        $users = (new User())->get()->where('is_broker', "=", '2');
        $params = [
            'users' => $users
        ];
        return view('users', $params);
    }

    public function adminpanel()
    {
        return view('admin');
    }

    public function show_post(Request $request)
    {
        $posts = Item::all();
        return view('admin', compact('posts'));
    }

    public function destroy_app($id)  
    { 
        Item::where('id', $id)->delete();
        return redirect('/adminpanel');
    } 


    public function index()  
    { 
       $users = User::All(); 
       return view('user', ['users'=>$users]); 
    } 
    public function destroy($id)  
    { 
        User::where('id', $id)->delete();
        return redirect('/users');
    } 

}

