<?php

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['region_name' => '北海道地方'],
            ['region_name' => '東北地方'],
            ['region_name' => '関東地方'],
            ['region_name' => '中部地方'],
            ['region_name' => '近畿地方'],
            ['region_name' => '中国地方'],
            ['region_name' => '四国地方'],
            ['region_name' => '九州地方'],
        ]);
    }
}