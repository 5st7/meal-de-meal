<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal_info;

class MealController extends Controller
{
  public function index()
    {
        // ダミーデータ
        $mials = [
            (object) [
                'meal_name' => "にんじん",
                'meal_limitday' => now(),
            ],
            (object) [
                'meal_name' => "しょうゆ",
                'meal_limitday' => now(),
            ],
            (object) [
                'meal_name' => "らーめん",
                'meal_limitday' => now(),
            ],
        ];
        return view('top',['mials' => $mials]);
  }

  public function store(Request $request)
  {
      $food_data = new Meal_info();
      $food_data->fill($request->except('_token'))->save();
      return redirect('/foodrecode');
  }
}
