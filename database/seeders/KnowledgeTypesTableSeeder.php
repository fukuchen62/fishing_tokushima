<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class KnowledgeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '基礎知識',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('knowledge_types')->insert($param);

        $param = [
            'name' => '道具・餌',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('knowledge_types')->insert($param);

        $param = [
            'name' => '注意点',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('knowledge_types')->insert($param);

        $param = [
            'name' => 'その他',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('knowledge_types')->insert($param);
    }
}
