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
        $city_id = $request->city_id;

        if ($city_id != null) {
            $items = ShopController::getRecentCity($city_id);
        } else {
            $items = Shop::all();
        }

        $data = [
            'shops' => $items,
        ];


        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('fronts.shops_list', $data);
    }

    public static function getRecentCity($cityId)
    {
        $shops = Shop::city($cityId)->get();
        return $shops;
    }
}
