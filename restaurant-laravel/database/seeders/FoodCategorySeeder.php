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
            'description' => 'Tommy Burger offers a range of delicious starters that are perfect for sharing with friends or enjoying as a meal all on their own. From classic favorites to unique twists on traditional dishes, our starters are designed to whet your appetite and get you ready for the main event.',
            'image_url' => 'https://static.vecteezy.com/system/resources/previews/010/833/993/original/corn-chips-mexican-nachos-isolated-on-white-background-with-clipping-path-png.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => ' Our burgers are cooked to order and served on a soft, toasted bun. Whether you prefer a classic cheeseburger or something more adventurous, like our signature Tommy Burger with bacon, onion rings, and BBQ sauce, we have something for everyone.',
            'image_url' => '/images/main-hamburger0landing-page.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => ' Our entrees are made with the same commitment to quality and freshness as our burgers and starters, and feature a variety of classic comfort foods with a modern twist. From our savory Chili Cheese Fries to our juicy Chicken Tenders, our entrees are sure to satisfy any craving.',
            'image_url' => 'https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => ' From our classic French Fries, made with fresh-cut potatoes and seasoned to perfection, to our crispy Onion Rings, our sides are the perfect blend of savory and crispy. And for those who want to try something a little different, our Sweet Potato Fries are a delicious and healthy alternative.',
            'image_url' => 'https://www.freeiconspng.com/thumbs/salad-png/greek-salad-png-21.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'description' => ' Our signature dessert is our warm and gooey Chocolate Lava Cake, made with rich chocolate cake and a molten chocolate center, served with a scoop of vanilla ice cream. For those who love classic desserts, our Apple Pie and Brownie Sundae are the perfect choice.',
            'image_url' => '/images/desserts.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_categories')->insert([
            'title' => 'drinks',
            'description' => ' From classic sodas to ice-cold beers, we have something for every taste. If you are looking for something refreshing, try one of our hand-crafted milkshakes, made with real ice cream and available in a variety of flavors, including chocolate, vanilla, and strawberry.',
            'image_url' => '/images/drinks.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
