<?php
// 名前空間
namespace App\Http\Controllers;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

// モデルを引用する
use App\Models\News;

use App\Models\Evacuation;



// スーパークラスControllerを継承して独自のクラスを作成する
class NewsController extends Controller
{

    // newsテーブル関連
    public function archiveInfo()
    {
        $items = News::all();

        $data = [
            'news' => $items,
        ];

        return view('info/archive_info', $data);
    }

    public function singleInfo()
    {
        $items = News::all();

        $data = [
            'news' => $items,
        ];

        return view('info/single_info', $data);
    }

    // evacuationテーブル関連
    public function pageEscape()
    {
        $items = Evacuation::all();

        $data = [
            'evacuations' => $items,
        ];

        return view('info/page_escape', $data);
    }
}
