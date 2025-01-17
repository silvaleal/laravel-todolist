<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = item::all();
        return view('index', compact('items'));
    }

    public function create()
    {
        if (!empty($_POST)) {
            $requi = item::create(["name"=>$_POST['name']]);
            return redirect()->route('index');
        }
        return view('create');
    }

    public function update($id)
    {
        $item = item::find($id);
        
        if (empty($item)) {
            return redirect()->route('index');
        }
        if (!empty($_POST)) {
            $item->update(["name"=>$_POST['name']]);
            return redirect()->route('index');
        }
        return view('update', compact('item'));  
    }

    public function delete($id)
    {
        item::destroy($id);
        return redirect()->route('index');
    }
}
