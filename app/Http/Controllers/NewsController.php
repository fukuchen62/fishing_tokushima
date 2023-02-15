<?php
// 名前空間
namespace App\Http\Controllers;

use Illuminate\Http\Request;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

// モデルを引用する
use App\Models\News;

use App\Models\Evacuation;



// スーパークラスControllerを継承して独自のクラスを作成する
class NewsController extends Controller
{

    // newsテーブル関連
    public function newsList(Request $request)
    {
        // $items = news::all();
        $category_id = $request->category_id;

        $items = NewsController::getCategory($category_id);

        $data = [
            'news' => $items,
        ];

        return view('fronts.news_list', $data);
    }

    public function newsInfo(Request $request)
    {
        $items = News::find($request->id);

        $data = [
            'news' => $items,
        ];

        return view('fronts.news_info', $data);
    }

    public function getCategory($cateId)
    {
        $knowledges = News::category($cateId)->get();
        return $knowledges;
    }
}
