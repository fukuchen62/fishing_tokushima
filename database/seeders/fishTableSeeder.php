<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class FishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'アジ（：鰺）',
            'formal_name' => 'Caranginae',
            'detail' => '沿岸の岩礁に居着くタイプは
                        体色が黄みがかっていて、
                        比較的体高がある。一方の
                        回遊型は全体的に黒っぽく、
                        体型も居着き型と比べて細
                        長いです。また、尾ビレの
                        前に「ぜんご／ぜいご」
                        と呼ばれるトゲのような
                        ウロコが並んでいます。',
            'cooking1' => 'フライ',
            'cooking2' => '刺身',
            'cooking3' => '南蛮漬け',
            'method' => 'サビキ釣り',
            'month' => '1,2,3,4,a',
            'level' => 1,
            'fish_img1' => 'test.png',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('fish')->insert($param);

        $param = [
            'name' => 'イワシ（：鰯）',
            'formal_name' => 'Sardinops melanostictus',
            'detail' => '平たく細長い魚体が特徴で、
                        腹側が銀色、背側が青色の
                        体色を持つ青魚の一種です。
                        体長は種類によって異なり
                        ますが小さいもので15cm
                        程度、大きいものでは30cm
                        ほどになります。 日本で
                        漁獲されるイワシは
                        「まいわし」「うるめいわし」
                        「かたくちいわし」の3種類
                        です。',
            'cooking1' => 'フライ',
            'cooking2' => 'アンチョビ',
            'cooking3' => 'カルパッチョ',
            'method' => 'サビキ釣り',
            'month' => '4,5,6,a',
            'level' => 1,
            'fish_img1' => 'test.png',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('fish')->insert($param);

        $param = [
            'name' => 'アジ（：鰺）',
            'formal_name' => 'Caranginae',
            'detail' => '沿岸の岩礁に居着くタイプは
                        体色が黄みがかっていて、
                        比較的体高がある。一方の
                        回遊型は全体的に黒っぽく、
                        体型も居着き型と比べて細
                        長いです。また、尾ビレの
                        前に「ぜんご／ぜいご」
                        と呼ばれるトゲのような
                        ウロコが並んでいます。',
            'cooking1' => 'フライ',
            'cooking2' => '刺身',
            'cooking3' => '南蛮漬け',
            'method' => 'サビキ釣り',
            'month' => '6,7,8,9,a',
            'level' => 1,
            'fish_img1' => 'test.png',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('fish')->insert($param);

        $param = [
            'name' => 'イワシ（：鰯）',
            'formal_name' => 'Sardinops melanostictus',
            'detail' => '平たく細長い魚体が特徴で、
                        腹側が銀色、背側が青色の
                        体色を持つ青魚の一種です。
                        体長は種類によって異なり
                        ますが小さいもので15cm
                        程度、大きいものでは30cm
                        ほどになります。 日本で
                        漁獲されるイワシは
                        「まいわし」「うるめいわし」
                        「かたくちいわし」の3種類
                        です。',
            'cooking1' => 'フライ',
            'cooking2' => 'アンチョビ',
            'cooking3' => 'カルパッチョ',
            'method' => 'サビキ釣り',
            'month' => '10,11,12,a',
            'level' => 1,
            'fish_img1' => 'test.png',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('fish')->insert($param);

        $param = [
            'name' => 'アジ（：鰺）',
            'formal_name' => 'Caranginae',
            'detail' => '沿岸の岩礁に居着くタイプは
                        体色が黄みがかっていて、
                        比較的体高がある。一方の
                        回遊型は全体的に黒っぽく、
                        体型も居着き型と比べて細
                        長いです。また、尾ビレの
                        前に「ぜんご／ぜいご」
                        と呼ばれるトゲのような
                        ウロコが並んでいます。',
            'cooking1' => 'フライ',
            'cooking2' => '刺身',
            'cooking3' => '南蛮漬け',
            'method' => 'サビキ釣り',
            'month' => '6,7,8,9,a',
            'level' => 1,
            'fish_img1' => 'test.png',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('fish')->insert($param);

        $param = [
            'name' => 'イワシ（：鰯）',
            'formal_name' => 'Sardinops melanostictus',
            'detail' => '平たく細長い魚体が特徴で、
                        腹側が銀色、背側が青色の
                        体色を持つ青魚の一種です。
                        体長は種類によって異なり
                        ますが小さいもので15cm
                        程度、大きいものでは30cm
                        ほどになります。 日本で
                        漁獲されるイワシは
                        「まいわし」「うるめいわし」
                        「かたくちいわし」の3種類
                        です。',
            'cooking1' => 'フライ',
            'cooking2' => 'アンチョビ',
            'cooking3' => 'カルパッチョ',
            'method' => 'サビキ釣り',
            'month' => '4,5,9,a',
            'level' => 1,
            'fish_img1' => 'test.png',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('fish')->insert($param);
    }
}