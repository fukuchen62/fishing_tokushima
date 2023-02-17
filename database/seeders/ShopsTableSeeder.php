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
            'name' => 'ポイント　徳島藍住店',
            'city_id' => 1,
            'postal_code' => '771-0361',
            'address' => '徳島県板野郡藍住町徳命字元村東84-1',
            'iframe' => 'https://maps.google.com/maps?output=embed&q=34.1179886557278,134.498341156759&t=m&hl=ja&z=18',
            'tel' => '088-688-0083',
            'service_day' => '月〜火　5:00~19:00　水〜日　5:00~19:00',
            'service' => '釣具販売',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'ポイント 徳島小松島店',
            'city_id' => 2,
            'postal_code' => '779-2305',
            'address' => '徳島県小松島市中郷町前田99-1-74',
            'iframe' => 'https://maps.google.com/maps?output=embed&q=34.0083204660463,134.56882045260548&t=m&hl=ja&z=18',
            'tel' => '0884-77-1120',
            'service_day' => '不明',
            'service' => '釣具販売',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'いはら釣具 本店',
            'city_id' => 3,
            'postal_code' => '771-0361',
            'address' => '徳島県板野郡松茂町笹木野灘25-16',
            'iframe' => 'https://maps.google.com/maps?output=embed&q=34.1358055374481,134.58506242068387&t=m&hl=ja&z=18',
            'tel' => '088-688-0083',
            'service_day' => '月〜火　5:00~19:00　水〜日　5:00~19:00',
            'service' => '釣具販売',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'いはら釣具 国府店',
            'city_id' => 4,
            'postal_code' => '779-2305',
            'address' => '徳島県徳島市国府町北岩延三反地１０−５',
            'iframe' => 'https://maps.google.com/maps?output=embed&q=34.0855012625122,134.4944944616899&t=m&hl=ja&z=18',
            'tel' => '0884-77-1120',
            'service_day' => '不明',
            'service' => '釣具販売',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('shops')->insert($param);
    }
}
