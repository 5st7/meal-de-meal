<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal_info;


class MealController extends Controller
{
    public function index()
    {
        $mials = Meal_info::all()->sortByDesc('created_at');

        $morth_cost = Meal_info::whereMonth('created_at',5)
        ->orderBy('created_at')->sum('meal_price');

        return view('top',['mials' => $mials],['morth_cost' => $morth_cost]);
    }

  public function store(Request $request){
      $food_data = new Meal_info();


      $food_data->meal_name      = $request->meal_name;
      $food_data->meal_num       = $request->meal_num;
      $food_data->meal_limitday  = $request->meal_limitday;
      $food_data->meal_price     = $request->meal_price;
      $food_data->meal_category  = $request->meal_category;
      $food_data->meal_image     = $request->meal_image;
      $food_data->user_id        = 1;
      $food_data->save();
      return redirect('/foodrecode');
  }
}
