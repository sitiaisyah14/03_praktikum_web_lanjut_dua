<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'foodname' => 'Chicken Parmagiana',
                'description' => 'Friend Chicken, Bolognaise, and Mozarela Cheese',
                'price' => '38000',
                'category' => 'Steak Food'
            ],
            [
                'foodname' => 'Ice Cream Sandwich',
                'description' => 'Ice Cream mix choclate, strawberry, Vanilla',
                'price' => '18000',
                'category' => 'Dessert'
            ],
            [
                'foodname' => 'Wedges',
                'description' => 'Potato wedges are irregular wedge-shaped potato wedges, often large and unpeeled, that are baked or fried.',
                'price' => '30000',
                'category' => 'Appetizer'
            ],
        ];
        DB::table('food_menus')->insert($data);
    }
}
