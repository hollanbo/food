<?php
namespace hollanbo\Food\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use hollanbo\Food\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
        $food = Food::with('ingredients')->get();

        return view('hollanbo_food::menu', ['food' => $food]);
    }
}
