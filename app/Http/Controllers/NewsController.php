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
        $newss = News::all();
        $news_name = $request->name;

        $items = NewsController::getNews($news_name);

        $data = [
            'news' => $items,
            'allnews' => $newss,
        ];

        return view('fronts/news_list', $data);
    }

    public function newsInfo(Request $request)
    {
        $items = News::find($request->id);

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