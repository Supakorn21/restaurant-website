<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Ground beef (or meat alternative), salt, pepper, buns, optional toppings.',
            'image_url' => '/images/desserts.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Ground beef (or meat alternative), salt, pepper, buns, optional toppings.',
            'image_url' => '/images/desserts.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Billys Burger',
            'description' => 'Ground beef (or meat alternative), salt, pepper, buns, optional toppings.',
            'image_url' => '/images/desserts.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
