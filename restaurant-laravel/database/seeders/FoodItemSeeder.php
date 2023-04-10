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
            'price' => 69,
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Ground beef (or meat alternative), salt, pepper, buns, optional toppings.',
            'image_url' => '/images/desserts.png',
            'price' => 69,
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Tommys Burger',
            'description' => 'Ground beef (or meat alternative), salt, pepper, buns, optional toppings.',
            'image_url' => '/images/desserts.png',
            'price' => 69,
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Ground beef (or meat alternative), salt, pepper, buns, optional toppings.',
            'image_url' => '/images/desserts.png',
            'price' => 59,
            'category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Steak',
            'description' => 'Ground beef (or meat alternative), salt, pepper, buns, optional toppings.',
            'image_url' => '/images/desserts.png',
            'price' => 89,
            'category_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cheese Sticks 5 Pcs.',
            'description' => 'Cheese Sticks for cheese lovers, deep fried Mozzarella cheese sticks, crispy coated with smooth Mozzarella cheese inside. A unique taste of cheese with every bite.',
            'image_url' => '/images/desserts.png',
            'price' =>
            69,
            'category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Spicy Chicken with Jaew Sauce',
            'description' => 'Our “Thai flavor” menu, “Thai Fried Chicken with Thai spicy sauce and jasmine rice” which is made from premium chicken thighs, coted in a light crispy breading. They are perfect with Thai Spicy Sauce and well cooked jasmine rice.',
            'image_url' => '/images/desserts.png',
            'price' =>
            79,
            'category_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Spicy Chicken with Jaew Sauce Value Meal',
            'description' => 'Our "Thai flavor" menu, "Crispy Chicken with Rice & Spicy Sauce (Jaew) and jasmine rice" which is made from premium chicken thighs, coted in a light crispy breading. They are perfect with Thai Spicy Sauce and well cooked jasmine rice. You can enjoy our Crispy Chicken with Rice & Spicy Sauce (Jaew) Value Meal with regular french fries and 16 oz. Coke. ',
            'image_url' => '/images/desserts.png',
            'price' =>
            179,
            'category_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cheesy Truffle French Fries',
            'description' => 'Cheesy Truffle French Fries - Black Truffle Collection. Served hot and crispy, our signature golden French Fries are made using 100% imported potatoes. They are golden on the outside and fluffy on the inside. In combination with Truffle Pate, Truffle Oil and Champignon Mushroom. This collection is delicious and such a perfect combination.',
            'image_url' => '/images/desserts.png',
            'price' =>
            159,
            'category_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Onion Rings',
            'description' => 'Served hot and crispy, our golden 100% imported Onion Rings. They can be both the perfect snack and the side dish.',
            'image_url' => '/images/desserts.png',
            'price' =>
            99,
            'category_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mango Sticky Rice Pie',
            'description' => 'Mango Sticky Rice Pie, it is delicious and crunchy. With the mouthwatering flavors of authentic Thai style mango sticky rice, you can’t just get enough from the very first bite.',
            'image_url' => '/images/desserts.png',
            'price' =>
            99,
            'category_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => 'Perfect with any meal, enjoy the genuine taste of Coca-Cola®.',
            'image_url' => '/images/drinks.png',
            'price' =>
            45,
            'category_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => 'Perfect with any meal, enjoy the genuine taste of Sprite.',
            'image_url' => '/images/drinks.png',
            'price' =>
            45,
            'category_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Orange Juice',
            'description' => 'Perfect with any meal, enjoy the genuine taste of Juice.',
            'image_url' => '/images/drinks.png',
            'price' =>
            50,
            'category_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('food_items')->insert([
            'title' => 'Greygoose shot',
            'description' => 'Perfect with any meal, enjoy the genuine taste of Greygoose.',
            'image_url' => '/images/drinks.png',
            'price' =>
            55,
            'category_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
