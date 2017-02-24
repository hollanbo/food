<?php

namespace hollanbo\Food\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public $table = "hollanbo_food_ingredients";

    public $timestamps = true;
    public $guarded = ['id'];

    public function food()
    {
        return $this->belongsToMany('hollanbo\Food\Models\Food', 'hollanbo_food_food_ingredients', 'ingredient_id', 'food_id');
    }
}
