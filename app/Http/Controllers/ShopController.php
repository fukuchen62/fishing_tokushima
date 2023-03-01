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
        $city_id = null;

        if (isset($request->city_id)) {
            $city_id = $request->city_id;
        }

        if ($city_id != null) {
            $shops = ShopController::getRecentCity($city_id);
        } else {
            $shops = Shop::all();
        }

        // グーグルマップに使用する緯度・経度・名前を
        // foreachで連想配列に格納する
        foreach ($shops as $value) {
            $shopList[] = [
                'lat' => $value->latitude,
                'lng' => $value->longitude,
                'text' => $value->name,
            ];
        }

        $data = [
            'shops' => $shops,
            'items' => $shopList,
            'city_id' => $city_id,
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
