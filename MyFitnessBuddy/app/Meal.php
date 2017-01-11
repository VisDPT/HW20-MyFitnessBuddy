<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    //Make sure your Meal model allows users to add a name.
      protected $fillable = [
        'mealName'
    ];
}
