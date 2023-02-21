<?php
// 名前空間
namespace App\Http\Controllers;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

// モデルを引用する
use App\Models\News;
use Carbon\Carbon;


// スーパークラスControllerを継承して独自のクラスを作成する
class NewsController extends Controller
{

    // newsテーブル関連
    public function newsList(Request $request)
    {
        // $item = News::all();

        // スコープ
        $name = $request->name;
        // $items = News::category($name)->get();

        if ($name != null) {
            $items = NewsController::getNews($name);
        } else {
            $items =
                News::all();
        }

        // $created_at = Carbon::createFromFormat('Y-m-d H:i:s',$items -> created_at)-> format('Y-m-d');

        $data = [
            // 'news' => $item,
            'news' => $items,
            // 'created_at'=>$created_at,
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
