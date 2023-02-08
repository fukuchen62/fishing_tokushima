<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DBクラスを使用できるように追記
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データ挿入命令
        $param = [
            'area' => '東部',
            'name' => '徳島',
        ];
        DB::table('cities')->insert($param);

        $param = [
            'area' => '東部',
            'name' => '松茂',
        ];
        DB::table('cities')->insert($param);

        $param = [
            'area' => '東部',
            'name' => '鳴門',
        ];
        DB::table('cities')->insert($param);

        $param = [
            'area' => '東部',
            'name' => '小松島',
        ];
        DB::table('cities')->insert($param);

        $param = [
            'area' => '南部',
            'name' => '阿南',
        ];
        DB::table('cities')->insert($param);

        $param = [
            'area' => '西部',
            'name' => '石井',
        ];
        DB::table('cities')->insert($param);
    }
}
