<?php
// 名前空間
namespace App\Http\Controllers;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

// モデルを引用する
use App\Models\News;


// スーパークラスControllerを継承して独自のクラスを作成する
class NewsController extends Controller
{

    // newsテーブル関連
    public function newsList(Request $request)
    {
        $item = News::all();
// スコープ
        $name = $request->name;
        $items = News::category($name)->get();

        $data = [
            'news' => $item,
            'news2' => $items,
        ];

        return view('fronts/news_list', $data);
    }

    public function newsInfo(Request $request)
    {
        $items = News::find($request->id);

        // スコープ
        // $name = $request->name;
        // $items = News::category($name)->get();

        $data = [
            'news' => $items,
        ];

        return view('fronts.news_info', $data);
    }

    public function getNews($newsName)
    {
        $news = News::NewsName($newsName)->get();
        return $news;
    }


}
