<?php
// 名前空間
namespace App\Http\Controllers;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

// モデルを引用する
use App\Models\News;

use App\Models\Evacuation;



// スーパークラスControllerを継承して独自のクラスを作成する
class NewsController extends Controller
{

    // newsテーブル関連
    public function newsList()
    {
        $items = News::all();

        $data = [
            'news' => $items,
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

    // evacuationテーブル関連
    public function escapeList()
    {
        $items = Evacuation::all();

        $data = [
            'evacuations' => $items,
        ];

        return view('fronts/escape_list', $data);
    }
}
