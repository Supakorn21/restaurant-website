<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit earum corrupti explicabo excepturi facilis qui alias mollitia, tempora inventore optio vel magni dicta culpa totam eaque fuga et corporis voluptatum repudiandae aliquid minima',
            'image_url' => 'https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit earum corrupti explicabo excepturi facilis qui alias mollitia, tempora inventore optio vel magni dicta culpa totam eaque fuga et corporis voluptatum repudiandae aliquid minima',
            'image_url' => '/images/main-hamburger0landing-page.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit earum corrupti explicabo excepturi facilis qui alias mollitia, tempora inventore optio vel magni dicta culpa totam eaque fuga et corporis voluptatum repudiandae aliquid minima',
            'image_url' => 'https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit earum corrupti explicabo excepturi facilis qui alias mollitia, tempora inventore optio vel magni dicta culpa totam eaque fuga et corporis voluptatum repudiandae aliquid minima',
            'image_url' => 'https://www.freeiconspng.com/thumbs/salad-png/greek-salad-png-21.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit earum corrupti explicabo excepturi facilis qui alias mollitia, tempora inventore optio vel magni dicta culpa totam eaque fuga et corporis voluptatum repudiandae aliquid minima',
            'image_url' => '/images/desserts.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'drinks',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit earum corrupti explicabo excepturi facilis qui alias mollitia, tempora inventore optio vel magni dicta culpa totam eaque fuga et corporis voluptatum repudiandae aliquid minima',
            'image_url' => '/images/drinks.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
