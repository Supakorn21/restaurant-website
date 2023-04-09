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
            'logo_image_url' => 'https://www.pngitem.com/pimgs/m/21-216129_restaurants-clipart-restaurant-symbol-logo-for-restaurant-png.png',
            'address_1' => 'สถานีบริการปตท.เลขที่ 158/2 หมู่ 2 ถนนชลบุรี-บายพาส ตำบล บ้านสวน    ',
            'address_2' => 'อำเภอเมืองชลบุรี ',
            'city' => 'ชลบุรี',
            'province' =>  'ชลบุรี',
            'zipcode' => '20000',
            'phone_number' => '0657257098',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
