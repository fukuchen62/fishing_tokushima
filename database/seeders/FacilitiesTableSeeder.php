<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '医療法人若草会 松村病院',
            'type' => '1',
            'postal_code' => '7710117',
            'address' => '徳島県徳島市川内町鶴島１６２',
            'tel' => '0886653233',
            'longitude' => '34.095071',
            'latitude' => '134.572239',
            'memo' => '',
            'is_show' => true,
        ];
        DB::table('Facilities')->insert($param);

        $param = [
            'name' => 'スーパー',
            'type' => '2',
            'postal_code' => '7700123',
            'address' => '徳島県徳島市川内町鶴島１６２',
            'tel' => '0886653233',
            'longitude' => '34.095071',
            'latitude' => '134.572239',
            'memo' => '',
            'is_show' => true,
        ];
        DB::table('Facilities')->insert($param);
    }
}