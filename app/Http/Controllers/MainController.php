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

// モデルを引用する
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
        // $created_at = $request->created_at;
        // $title = $request->title;
        $items = News::where('created_at', $request->created_at)->get();
        $data = [
            'news' => $items,
        ];
        return view('fronts.index', $data);
    }

    /**
     * myPage
     * マイページ
     *
     * @return void
     */
    public function myPage()
    {
        return view('fronts.mypage');
    }
}