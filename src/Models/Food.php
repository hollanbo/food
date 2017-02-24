<?php

namespace hollanbo\Food\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $table = "hollanbo_food_food";

    public $timestamps = true;
    public $guarded = ['id'];

    public function ingredients()
    {
        return $this->belongsToMany('hollanbo\Food\Models\Ingredient', 'hollanbo_food_food_ingredients', 'food_id', 'ingredient_id');
    }

    public function getIngredientListAttribute()
    {
        return ucfirst($this->ingredients->implode('name', ', '));
    }
}
