<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoodRecodeRequest;
use App\Meal_info;
use Auth;

class MealController extends Controller
{
    public function index()
    {
        $mials = Meal_info::all()->sortByDesc('created_at');

        $morth_cost = Meal_info::whereMonth('created_at',5)
        ->orderBy('created_at')->sum('meal_price');

        return view('top',['mials' => $mials],['morth_cost' => $morth_cost]);
    }



  public function store(FoodRecodeRequest $request){

    $request->file('meal_image')->store('public');

      $food_data = new Meal_info();

      $food_data->meal_name      = $request->meal_name;
      $food_data->meal_num       = $request->meal_num;
      $food_data->meal_limitday  = $request->meal_limitday;
      $food_data->meal_price     = $request->meal_price;
      $food_data->meal_category  = $request->meal_category;
      $food_data->meal_image     = $request->meal_image;//なんか良い感じにファイルのパスが入る
      $food_data->user_id        = Auth::id();
      $food_data->save();
      return redirect('/foodrecode');
  }
}
