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
        $city_id = 1;

        if (isset($request->city_id)) {
            $city_id = $request->city_id;
        }

        if ($city_id != null) {
            $spots = SpotController::getCity($city_id);
        } else {
            $spots = Spot::all();
        }

        // グーグルマップに使用する緯度・経度・名前を
        // foreachで連想配列に格納する
        foreach ($spots as $value) {
            $spotList[] = [
                'lat' => $value->spot_latitude,
                'lng' => $value->spot_longitude,
                'text' => $value->name,
                'id' => $value->id,
            ];
        }

        $data = [
            'spots' => $spots,
            'city_id' => $city_id,
            'items' => $spotList,
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

        // グーグルマップに使用する緯度・経度・名前を連想配列に格納する
        $spotInfo[] = [
            'lat' => $items->spot_latitude,
            'lng' => $items->spot_longitude,
            'text' => $items->name,
            'type' => 1,
        ];

        // 関連フィッシュIDを取得
        $fish_id = $items->fish_id;
        if ($fish_id != '') {
            $fish_id_list = explode("|", $fish_id);
        }
        // 関連フィッシュ情報を取得
        foreach ($fish_id_list as $id) {
            // fish_idが5以下の魚の情報を取得
            if ($id <= 5) {
                $fishinfo5 = Fish::find($id);
                // fish情報を配列に加える
                $fish_info_list[] = $fishinfo5;
            }

            // fish情報を読み込む
            $fishinfo = Fish::find($id);
            // 釣り方を配列に加える
            $fish_method_list[] = $fishinfo->method;
        }


        // 関連ショップIDを取得
        $shop_id = $items->shop_id;
        if ($shop_id != '') {
            $shop_id_list = explode("|", $shop_id);
        }
        // 関連ショップ情報を取得
        foreach ($shop_id_list as $id) {
            // shop情報を読み込む
            $info = Shop::find($id);

            // グーグルマップに使用する緯度・経度・名前を連想配列に格納する
            if ($info != null) {
                $shopInfo = [
                    'lat' => $info->latitude,
                    'lng' => $info->longitude,
                    'text' => $info->name,
                    'type' => 2,
                ];
                // shop情報を$spotInfo配列に加える
                $spotInfo[] = $shopInfo;
            }
        }

        // 駐車場情報を取得
        $parking_id = $items->parking_id;
        $info = Facility::where('id', $parking_id)->first();

        if ($info != null) {
            $parking = [
                'lat' => $info->latitude,
                'lng' => $info->longitude,
                'text' => $info->name,
                'type' => "",
            ];
            // パーキング情報を$spotInfo配列に加える
            $spotInfo[] = $parking;
        } else {
            // スポット表示のために、駐車場がない場合は空白を代入
            $parking = [
                'text' => '無',
            ];
        }


        // 避難場所IDを取得
        $evacuation_id = $items->evacuation_id;
        if ($evacuation_id != '') {
            $evacuation_id_list = explode("|", $evacuation_id);
        }

        // 避難場所情報を取得
        foreach ($evacuation_id_list as $id) {
            // 避難場所を読み込む
            $info = Evacuation::find($id);

            // グーグルマップに使用する緯度・経度・名前を連想配列に格納する
            if ($info != null) {
                $evacuationinfo = [
                    'lat' => $info->latitude,
                    'lng' => $info->longitude,
                    'text' => $info->name,
                    'type' => 3,
                ];
                // 避難場所情報を配列に加える
                $spotInfo[] = $evacuationinfo;
                $evacuation_info_list[] = $evacuationinfo;
            }
        }

        // $evacuation_info_list[] = [
        //     'lat' => 34.181875,
        //     'lng' => 134.593061,
        //     'text' => '市道中山黒崎線(鳴門病院南)',
        // ];

        $city_id = $items->city_id;

        $connection1 = Spot::where('city_id', '=', $city_id)
            ->where('id', '<>', $spot_id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $data = [
            'spots' => $items,
            'spotInfo' => $spotInfo,
            'fishinfo5' => $fishinfo5,
            'fishlist' => $fish_info_list,
            'fishMethod' => $fish_method_list,
            // 'shoplist' => $shop_info_list,
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

    /**
     * getCity
     *地域IDごとに絞り込む関数

     * @param [type] $cityId
     * @return void
     */
    public function getCity($cityId)
    {
        $cities = Spot::city($cityId)->get();
        return $cities;
    }
}
