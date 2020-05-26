<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['category','f_name', '_token', 'volume', 'price'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
