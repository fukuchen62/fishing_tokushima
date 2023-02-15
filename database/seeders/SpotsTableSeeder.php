<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '岡崎海岸',
            'overview' => 'テストです',
            'city_id' => 1,
            'postal_code' => '772-0013',
            'spot_address' => '徳島県鳴門市撫養町岡崎二等道路東-88',
            'iframe_url' => 'test',
            'toilet' => '有',
            'fish_id' => '1,3,5,6',
            'mony' => '1500',
            'BBQ' => '無',
            'shop_id' => '4',
            'plan_id' => '2',
            'hospital_id' => 1,
            'supermarket_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('spots')->insert($param);

        $param = [
            'name' => '亀浦観光港',
            'overview' => 'テスト2です',
            'city_id' => 2,
            'postal_code' => '772-0053',
            'spot_address' => '徳島県鳴門市鳴門町土佐泊浦大毛　亀浦漁港',
            'iframe_url' => 'test',
            'toilet' => '有',
            'fish_id' => '1,2',
            'mony' => '1000',
            'BBQ' => '無',
            'shop_id' => '2',
            'plan_id' => '1',
            'hospital_id' => 1,
            'supermarket_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('spots')->insert($param);

        $param = [
            'name' => '岡崎海岸',
            'overview' => 'テスト3です',
            'city_id' => 2,
            'postal_code' => '772-0013',
            'spot_address' => '徳島県鳴門市撫養町岡崎二等道路東-88',
            'iframe_url' => 'test',
            'toilet' => '有',
            'fish_id' => '2',
            'mony' => '1000',
            'BBQ' => '無',
            'shop_id' => '1,3',
            'plan_id' => '2',
            'hospital_id' => 1,
            'supermarket_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('spots')->insert($param);

        $param = [
            'name' => '亀浦観光港',
            'overview' => 'テスト4です',
            'city_id' => 1,
            'postal_code' => '772-0053',
            'spot_address' => '徳島県鳴門市鳴門町土佐泊浦大毛　亀浦漁港',
            'iframe_url' => 'test',
            'toilet' => '有',
            'fish_id' => '2,4,6',
            'mony' => '1000',
            'BBQ' => '無',
            'shop_id' => '1,4',
            'plan_id' => '1',
            'hospital_id' => 1,
            'supermarket_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('spots')->insert($param);
    }
}
