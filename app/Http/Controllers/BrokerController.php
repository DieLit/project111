<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class BrokerController extends Controller
{
    public function show()
    {
        return view('add');
    }

    public function add(Request $request)
    {
        $request->validate ([
            'img' => 'required|file',
            'name_apps'=>'required',
            'room'=>'required',
            'price'=>'required',
            'type'=>'required',
            'desc'=>'required',
            'city'=>'required',
            'street'=>'required',
            'garage'=>'required',
            'total_area'=>'required',
            'useble_area'=>'required',
            'balcony'=>'required',
            'terrace'=>'required',
            'bath'=>'required',
            'img1'=>'required|file',
            'img2'=>'required|file',
            'img3'=>'required|file',
            'fio_broker'=>'required',
            'email_broker'=>'required',
            'phone_broker'=>'required',
        ]);

        Item::create($request->all());
        return redirect('/');

        $path = $request->file('img')->store('uploads', 'public');
        $path = $request->file('img1')->store('uploads', 'public');
        $path = $request->file('img2')->store('uploads', 'public');
        $path = $request->file('img3')->store('uploads', 'public');
       return view('/catalog', ['path' => $path]); 
    }
}
