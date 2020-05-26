<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal_info;
use Auth;

class MealController extends Controller
{
  public function index()
    {
        $mials = Meal_info::all()->sortBy('meal_limitday');
        return view('top',['mials' => $mials]);
    }

  public function store(Request $request){
      $food_data = new Meal_info();

      $food_data->meal_name      = $request->meal_name;
      $food_data->meal_num       = $request->meal_num;
      $food_data->meal_limitday  = $request->meal_limitday;
      $food_data->meal_price     = $request->meal_price;
      $food_data->meal_category      = $request->meal_category;
      $food_data->meal_image     = "hogehoge.jpeg";
      $food_data->user_id        = Auth::id();
      $food_data->save();
      return redirect('/foodrecode');
  }
}
