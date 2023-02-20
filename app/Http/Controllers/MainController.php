<?php
// 名前空間
namespace App\Http\Controllers;

// クラスをインポートする
//クライアントからのリクエストを受信するためのクラス
use Illuminate\Http\Request;

//クライアントへレスポンスするためのクラス
use Illuminate\Http\Reponse;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use App\Models\Evacuation;
use App\Models\News;



// スーパークラスControllerを継承して独自のクラスを作成する
class MainController extends Controller
{

    /**
     * index
     * トップページ
     *
     * @return void
     */
    public function index(Request $request)
    {
        // ニュースの情報を取得
        // $item = News::all();

        $items = News::orderBy('id', 'desc')
            ->limit(4)
            ->get();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'items' => $items,
        ];

        return view('fronts.index', $data);
    }



    /**
     * secapeList
     * 避難場所ページ
     *
     * @return void
     */
    public function escapeList()
    {
        // $items = Evacuation::all();
        $items = Evacuation::where('id', 1)->get();

        $data = [
            'evacuations' => $items,
        ];

        return view('fronts/escape_list', $data);
    }
    /**
     * praivacyPage
     * プライバシーポリシーページ
     *
     * @return void
     */
    public function praivacyPage()
    {
        return view('fronts/page_praivacy');
    }

    public function usPage()
    {
        return view('fronts/page_us');
    }
}
