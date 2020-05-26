<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal_info extends Model
{
    protected $fillable = ['meal_category','meal_name','meal_price','meal_limitday','meal_num'];
    protected $table = 'meal_info';
}
