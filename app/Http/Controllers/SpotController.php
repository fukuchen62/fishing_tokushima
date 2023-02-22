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

use App\Models\Spot;
use App\Models\Fish;
use App\Models\Shop;
use App\Models\Facility;
use App\Models\City;
use App\Models\Evacuation;

// スーパークラスControllerを継承して独自のクラスを作成する
class SpotController extends Controller
{

    public function spotList(Request $request)
    {
        // $spots = Spot::all();

        $city_id = $request->city_id;

        // Spotモデルのcityスコープを使って絞り込む
        $items = Spot::city($city_id)->get();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'spots' => $items,
            // 'spots2' => $spots,
        ];

        return view('fronts.spots_list', $data);
    }

    public function spotInfo(Request $request)
    {
        $spot_id = '';

        // idがあれば$idに代入
        if (isset($request->id)) {
            $spot_id = $request->id;
        }
        // idで該当のスポット情報を取得
        $items = Spot::find($spot_id);

        // 関連フィッシュIDを取得
        $fish_id = $items->fish_id;
        if ($fish_id != '') {
            $fish_id_list = explode("|", $fish_id);
        }
        // 関連フィッシュ情報を取得
        foreach ($fish_id_list as $id) {
            // fish情報を読み込む
            $fishinfo = Fish::find($id);
            // fish情報を配列に加える
            $fish_info_list[] = $fishinfo;
        }

        // 関連ショップIDを取得
        $shop_id = $items->shop_id;
        if ($shop_id != '') {
            $shop_id_list = explode("|", $shop_id);
        }
        // 関連ショップ情報を取得
        foreach ($shop_id_list as $id) {
            // shop情報を読み込む
            $shopinfo = Shop::find($id);
            // shop情報を配列に加える
            $shop_info_list[] = $shopinfo;
        }

        // 駐車場情報を取得
        $parking_id = $items->parking_id;
        $parking = Facility::where('id', $parking_id)->first();


        // 避難場所IDを取得
        $evacuation_id = $items->evacuation_id;
        if ($evacuation_id != '') {
            $evacuation_id_list = explode("|", $evacuation_id);
        }

        // 避難場所情報を取得
        foreach ($evacuation_id_list as $id) {
            // 避難場所を読み込む
            $evacuationinfo = Evacuation::find($id);
            // shop情報を配列に加える
            $evacuation_info_list[] = $evacuationinfo;
        }


        $city_id = $items->city_id;

        $connection1 = Spot::where('city_id', '=', $city_id)
            ->where('id', '<>', $spot_id)
            ->limit(3)
            ->get();

        $data = [
            'spots' => $items,
            'fishlist' => $fish_info_list,
            'shoplist' => $shop_info_list,
            'connection1' => $connection1,
            'parking' => $parking,
            'evacuationlist' => $evacuation_info_list,

        ];

        return view('fronts.spots_info', $data);
    }

    public function facilityList()
    {
        $items = Facility::all();

        $data = [
            'facilities' => $items,
        ];

        return view('fronts.facilities_list', $data);
    }

    public function cityList()
    {
        $items = City::all();

        $data = [
            'cities' => $items,
        ];

        return view('fronts.cities_list', $data);
    }
}
