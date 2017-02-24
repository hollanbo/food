<?php

namespace hollanbo\Food\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $table = "hollanbo_food_food";

    public $timestamps = true;
    public $guarded = ['id'];

}
