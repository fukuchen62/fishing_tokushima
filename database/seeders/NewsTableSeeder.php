<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DBクラスを使用できるように追記
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
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
            'name' => 'イベント',
            'title' => '徳島市で釣具フェア',
            'overview' => '徳島市釣具フェアの概要です。徳島市釣具フェアの概要です。',
            'content' => '徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。',
        ];
        DB::table('news')->insert($param);

        $param = [
            'name' => 'アップデート',
            'title' => '体験プランに新しいプランを追加しました！',
            'overview' => 'アップデートした体験プランの概要です。アップデートした体験プランの概要です。',
            'content' => 'アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。',
        ];
        DB::table('news')->insert($param);

        $param = [
            'name' => 'イベント2',
            'title' => '徳島市で釣具フェア2',
            'overview' => '徳島市釣具フェアの概要です。徳島市釣具フェアの概要です。',
            'content' => '徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。',
        ];
        DB::table('news')->insert($param);

        $param = [
            'name' => 'アップデート2',
            'title' => '体験プランに新しいプランを追加しました！2',
            'overview' => 'アップデートした体験プランの概要です。アップデートした体験プランの概要です。',
            'content' => 'アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。',
        ];
        DB::table('news')->insert($param);

        $param = [
            'name' => 'イベント3',
            'title' => '徳島市で釣具フェア3',
            'overview' => '徳島市釣具フェアの概要です。徳島市釣具フェアの概要です。',
            'content' => '徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。徳島市釣具フェアの詳細内容です。',
        ];
        DB::table('news')->insert($param);

        $param = [
            'name' => 'アップデート3',
            'title' => '体験プランに新しいプランを追加しました！3',
            'overview' => 'アップデートした体験プランの概要です。アップデートした体験プランの概要です。',
            'content' => 'アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。アップデートした体験プランの詳細内容です。',
        ];
        DB::table('news')->insert($param);
    }
}