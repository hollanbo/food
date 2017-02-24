<?php
namespace hollanbo\Food\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $food = [
            [
                'name' => 'Margherita',
                'ingredients' => [
                    'tomato',
                    'cheese',
                    'sperm'
                ],
                'photo' => 'src',
            ]
        ];
        return view('hollanbo_food::menu', ['food' => $food]);
    }
}
