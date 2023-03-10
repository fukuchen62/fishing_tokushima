<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class KnowledgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category_id' => '1',
            'title' => 'サビキ',
            'overview' => '初心者やファミリーフィッシングで手軽にチャレンジできる簡単で釣果が出やすい「サビキ釣り」。
無難だけど手軽に楽しめる海釣りとして広く知られています。
釣り方がとても簡単で分かりやすく、防波堤や釣り公園から気軽に楽しむことができます。
活きエサを使わないので臭いや、ちょっとグロっぽいのが苦手な方でも大丈夫！',
            'content' => 'サビキの王道！豆アジ！イワシもサバも時期によってはなんでも釣れる五目釣り。
サビキ釣りとはエサに似せた疑餌バリを連ねた仕掛けのことです。
サビキ仕掛けの上（または下）には、寄せエサとなるアミを入れるカゴを組み合わせ、竿を上下に動かすだけでエサがカゴから拡散されて、
それにより小魚の群れを集めて、最後はサビキに食いつかせます。堤防周りに集まる小魚なら、多くの種類がこの方法で釣れます。
７月下旬～９月中旬がよく釣れる 　適水温：16～26℃
最も釣果が出る時合（じあい）は朝5時～7時と17時～19時。日中でも釣れます。',
            'thumbnail' => '',
            'is_show' => true,
            // 'deleted_at' => '',
        ];
        DB::table('knowledge')->insert($param);

        $param = [
            'category_id' => '2',
            'title' => 'チョイ投げ',
            'overview' => 'オモリ付きのしかけを軽く投げるチョイ投げ',
            'content' => '波止の大物と言えばなんと言っても【クロダイ（チヌ）】ベテランさんから、まだ釣りを覚えたての初心者さんまで、幅広く狙われる大人気のターゲット！
クロダイは基本的には専門の釣り方で狙わないと、釣るのが難しい魚ですが、『サビキをしていたら釣れた』、『チョイ投げで掛かった』など、初心者でも不意に釣れることがあるほど、日常的に釣れる魚でもあります。チョイ投げはクロダイ以外にもキス、ハゼ、セイゴなど色々な魚釣れる簡単な釣りです。
適水温：15～21℃　高活性は18℃ほど　3～5月に大型狙いで6月半ば～10月が数も狙えてもっともよく釣れる。時間帯は朝まずめ（日の出前後1時間位）と夕まずめ（日の入り前後1時間位）',
            'thumbnail' => '',
            'is_show' => true,
            // 'deleted_at' => '',
        ];
        DB::table('knowledge')->insert($param);

        $param = [
            'category_id' => '3',
            'title' => 'ブラクリ',
            'overview' => 'オモリ付きのしかけを軽く投げるチョイ投げ',
            'content' => '波止の大物と言えばなんと言っても【クロダイ（チヌ）】ベテランさんから、まだ釣りを覚えたての初心者さんまで、幅広く狙われる大人気のターゲット！
クロダイは基本的には専門の釣り方で狙わないと、釣るのが難しい魚ですが、『サビキをしていたら釣れた』、『チョイ投げで掛かった』など、初心者でも不意に釣れることがあるほど、日常的に釣れる魚でもあります。チョイ投げはクロダイ以外にもキス、ハゼ、セイゴなど色々な魚釣れる簡単な釣りです。
適水温：15～21℃　高活性は18℃ほど　3～5月に大型狙いで6月半ば～10月が数も狙えてもっともよく釣れる。時間帯は朝まずめ（日の出前後1時間位）と夕まずめ（日の入り前後1時間位）',
            'thumbnail' => '',
            'is_show' => true,
            // 'deleted_at' => '',
        ];
        DB::table('knowledge')->insert($param);

        $param = [
            'category_id' => '4',
            'title' => 'エギング',
            'overview' => 'オモリ付きのしかけを軽く投げるチョイ投げ',
            'content' => '波止の大物と言えばなんと言っても【クロダイ（チヌ）】ベテランさんから、まだ釣りを覚えたての初心者さんまで、幅広く狙われる大人気のターゲット！
クロダイは基本的には専門の釣り方で狙わないと、釣るのが難しい魚ですが、『サビキをしていたら釣れた』、『チョイ投げで掛かった』など、初心者でも不意に釣れることがあるほど、日常的に釣れる魚でもあります。チョイ投げはクロダイ以外にもキス、ハゼ、セイゴなど色々な魚釣れる簡単な釣りです。
適水温：15～21℃　高活性は18℃ほど　3～5月に大型狙いで6月半ば～10月が数も狙えてもっともよく釣れる。時間帯は朝まずめ（日の出前後1時間位）と夕まずめ（日の入り前後1時間位）',
            'thumbnail' => '',
            'is_show' => true,
            // 'deleted_at' => '',
        ];
        DB::table('knowledge')->insert($param);
    }
}
