<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('general_settings')->insert([
            'site_title' => 'Tommy Burger',
            'logo_image-url' => 'https://www.pngitem.com/pimgs/m/21-216129_restaurants-clipart-restaurant-symbol-logo-for-restaurant-png.png',
            'address_1' => '150/312 Countrypark3 Bangsaen ',
            'address_2' => '',
            'city' => 'Chonburi',
            'province' =>  'Chonburi',
            'zipcode' => '20130',
            'phone_number' => '098-4637184',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
