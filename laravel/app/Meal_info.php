<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal_info extends Model
{
    protected $table = 'meal_info';
    protected $fillable = ['meal_category','meal_name','meal_price','meal_limitday','meal_num'];

}
