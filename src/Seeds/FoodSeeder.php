<?php
namespace hollanbo\Food\Seeds;

use Illuminate\Database\Seeder;
use DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $food = [
            [
                'id' => 10,
                'name' => 'Margherita',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 11,
                'name' => 'Klasika',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 12,
                'name' => 'Kmečka',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 13,
                'name' => '4 siri',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 14,
                'name' => 'Koruzna',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 15,
                'name' => 'Zelenjavna',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 16,
                'name' => 'Pikantna',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 17,
                'name' => 'Tuna',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        $ingredients = [
            [
                'id' => 10,
                'name' => 'sir'
            ],
            [
                'id' => 11,
                'name' => 'paradajz'
            ],
            [
                'id' => 12,
                'name' => 'šunka'
            ],
            [
                'id' => 13,
                'name' => 'gobe'
            ],
            [
                'id' => 14,
                'name' => 'suha salama'
            ],
            [
                'id' => 15,
                'name' => 'mozzarella'
            ],
            [
                'id' => 16,
                'name' => 'parmezan'
            ],
            [
                'id' => 17,
                'name' => 'gauda'
            ],
            [
                'id' => 18,
                'name' => 'edamec'
            ],
            [
                'id' => 19,
                'name' => 'parmezan'
            ],
            [
                'id' => 20,
                'name' => 'origano'
            ],
            [
                'id' => 21,
                'name' => 'sveža bazilika'
            ],
            [
                'id' => 22,
                'name' => 'koruza'
            ],
            [
                'id' => 23,
                'name' => 'feferoni'
            ],
            [
                'id' => 24,
                'name' => 'tuna'
            ],
            [
                'id' => 25,
                'name' => 'čebula'
            ],
            [
                'id' => 26,
                'name' => 'dimljen losos'
            ],
            [
                'id' => 27,
                'name' => 'čebula'
            ],
            [
                'id' => 28,
                'name' => 'tartufovo olje'
            ],
            [
                'id' => 29,
                'name' => 'paprika'
            ]
        ];

        $food_ingredients = [
            [
                'food_id' => 10,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 10,
                'ingredient_id' => 11
            ],
            [
                'food_id' => 10,
                'ingredient_id' => 20
            ],
            [
                'food_id' => 11,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 11,
                'ingredient_id' => 11
            ],
            [
                'food_id' => 11,
                'ingredient_id' => 20
            ],
            [
                'food_id' => 11,
                'ingredient_id' => 12
            ],
            [
                'food_id' => 11,
                'ingredient_id' => 13
            ],
            [
                'food_id' => 12,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 12,
                'ingredient_id' => 11
            ],
            [
                'food_id' => 12,
                'ingredient_id' => 12
            ],
            [
                'food_id' => 12,
                'ingredient_id' => 14
            ],
            [
                'food_id' => 13,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 13,
                'ingredient_id' => 15
            ],
            [
                'food_id' => 13,
                'ingredient_id' => 16
            ],
            [
                'food_id' => 13,
                'ingredient_id' => 17
            ],
            [
                'food_id' => 13,
                'ingredient_id' => 18
            ],
            [
                'food_id' => 13,
                'ingredient_id' => 20
            ],
            [
                'food_id' => 14,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 14,
                'ingredient_id' => 11
            ],
            [
                'food_id' => 14,
                'ingredient_id' => 12
            ],
            [
                'food_id' => 14,
                'ingredient_id' => 20
            ],
            [
                'food_id' => 14,
                'ingredient_id' => 22
            ],
            [
                'food_id' => 15,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 15,
                'ingredient_id' => 11
            ],
            [
                'food_id' => 15,
                'ingredient_id' => 22
            ],
            [
                'food_id' => 15,
                'ingredient_id' => 29
            ],
            [
                'food_id' => 15,
                'ingredient_id' => 13
            ],
            [
                'food_id' => 15,
                'ingredient_id' => 21
            ],
            [
                'food_id' => 16,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 16,
                'ingredient_id' => 11
            ],
            [
                'food_id' => 16,
                'ingredient_id' => 12
            ],
            [
                'food_id' => 16,
                'ingredient_id' => 23
            ],
            [
                'food_id' => 17,
                'ingredient_id' => 10
            ],
            [
                'food_id' => 17,
                'ingredient_id' => 11
            ],
            [
                'food_id' => 17,
                'ingredient_id' => 24
            ],
            [
                'food_id' => 17,
                'ingredient_id' => 22
            ],
            [
                'food_id' => 17,
                'ingredient_id' => 27
            ],
        ];

        DB::table('hollanbo_food_food')->insert($food);
        DB::table('hollanbo_food_ingredients')->insert($ingredients);
        DB::table('hollanbo_food_food_ingredients')->insert($food_ingredients);
    }
}

