<?php

namespace hollanbo\Food\Models;

use Illuminate\Database\Eloquent\Model;
use View;

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
        return $this->ingredients->implode('name', ', ');
    }

    public function getImagePathAttribute()
    {
        if (!empty($this->photo)) {
            $path = '/hollanbo_food_photos/' . $this->photo;
            return file_exists(public_path($path)) ? $path : '';
        }

        return '';
    }
}
