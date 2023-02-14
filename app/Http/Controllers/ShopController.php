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

use App\Models\Shop;

// スーパークラスControllerを継承して独自のクラスを作成する
class ShopController extends Controller
{

    public function shopList(Request $request)
    {
        $items = Shop::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'shops' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('fronts.shops_list', $data);
    }

    public function getRecentCity($cityId)
    {
        $shops = Shop::city($cityId)->get();
        return $shops;
    }
}