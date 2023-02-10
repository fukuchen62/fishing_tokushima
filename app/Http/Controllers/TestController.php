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

use App\Models\News;

// スーパークラスControllerを継承して独自のクラスを作成する
class TestController extends Controller
{

    public function knowledgeList(Request $request)
    {
        $items = News::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'news' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('sample.news_list', $data);
    }
}