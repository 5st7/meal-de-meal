<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\FoodRecodeRequest;
use App\Meal_info;
use Auth;

class MealController extends Controller
{
  public function index()  {
    // 食品リスト
    $mials = Meal_info::all()->where('user_id',Auth::id())->where('used',false)->sortBy('meal_limitday');
   
    // 今月の食費
    $month_cost = Meal_info::whereMonth('created_at',5)->where('user_id',Auth::id())
       ->sum('meal_price');

    // 冷蔵庫貯金
    $freeze_cost = Meal_info::all()->where('user_id',Auth::id())->where('used',false)->sum('meal_price');



    return view('top',[
     'mials' => $mials,
     'freeze_cost' => $freeze_cost,
     'month_cost' => $month_cost
     ]);
 }
 
public function alert(){
  // 賞味期限
  $now = Carbon::now();
  $date = $now->subDays(5);
  $syomikigen = \DB::table('meals')->where('user_id',Auth::id())->whereDay('meal_limitday','>',$date)->where('used',false)->get()->all();
  return view('alert',['meals'=>$syomikigen]);
}

 public function used(Request $request){
    $meal = Meal_info::where('id',$request->id)->first();
    $meal->used = true;
    $meal->save();

    return redirect('/');
 }

  public function store(FoodRecodeRequest $request){
    $file_path = $request->file('meal_image')->store('public');
    $food_data = new Meal_info();

    $food_data->meal_name      = $request->meal_name;
    $food_data->meal_limitday  = $request->meal_limitday;
    $food_data->meal_price     = $request->meal_price;
    $food_data->meal_category  = $request->meal_category;
    $food_data->meal_image     = str_replace('public/', '', $file_path);
    $food_data->user_id        = Auth::id();
    $food_data->save();
    return redirect('/foodrecode');
  }
}
