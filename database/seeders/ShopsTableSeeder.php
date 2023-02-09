<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '江ぐち釣具店',
            'city_id' => 3,
            'postal_code' => '771-0361',
            'address' => '徳島県鳴門市瀬戸町堂浦字地廻り弐326',
            'tel' => '088-688-0083',
            'service_day' => '月〜火　5:00~19:00　水〜日　5:00~19:00',
            'service' => '釣具販売',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'えさいち日和佐',
            'city_id' => 3,
            'postal_code' => '779-2305',
            'address' => '徳島県海部郡美波町奥河内字弁才天233-74',
            'tel' => '0884-77-1120',
            'service_day' => '不明',
            'service' => '釣具販売',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('shops')->insert($param);
    }
}