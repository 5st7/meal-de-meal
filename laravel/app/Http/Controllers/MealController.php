<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class MealController extends Controller
{
    public function create()
    {
        return view('foodrecode')->with([ 'posts' => Post::all() ]);
    }
    
    public function store(Request $req)
    {
        $b = new Meal();
        $b->fill($req->except('_token'))->save();
        return redirect('foodrecode');
    }
}