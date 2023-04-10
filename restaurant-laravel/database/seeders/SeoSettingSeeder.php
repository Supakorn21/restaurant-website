<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Tommy Burgers เป็นร้านอาหารประเภทแฮมเบอร์เกอร์ ก่อตั้งเมื่อวันที่ 4 ธันวาคม ค.ศ. 1954 สำนักงานใหญ่อยู่ที่พื้นที่ unincorporated Miami-Dade County รัฐฟลอริดา ประเทศสหรัฐอเมริกา Tommy Burgers โอลด์ดิ้งเป็นชื่อบริษัทแม่ของTommy Burgers ในประเทศสหรัฐอเมริกา บริษัท ดำเนินการอยู่ภายใต้ชื่อTommy Burgersแบรนด์ ในขณะที่ชื่อ บริษัท ดำเนินการอยู่ในระดับสากลภายใต้แบนเนอร์ Tommy Burgers Corporation โดยในประเทศไทย เดอะ ไมเนอร์ ฟู้ด กรุ๊ป[1] เป็นบริษัทผู้ได้รับเฟรนไชส์",
            'keywords' => 'Burwgers, Local Burger, Tommy Burger, Salads, Best Burgers in Town',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
