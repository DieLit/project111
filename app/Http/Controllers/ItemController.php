<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function show(Request $request)
    {
        $posts = Item::all();
        return view('catalog', compact('posts'));
    }

    public function open($id)
    {
      $post = Item::find($id);
      return view('item', compact('post'));
    }
}
