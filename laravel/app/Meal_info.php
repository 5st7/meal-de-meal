<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal_info extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
    protected $table = 'meals';
    protected $dates = [
        'meal_limitday'
    ];
}
