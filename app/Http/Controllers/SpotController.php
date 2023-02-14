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
use App\Models\Facility;
use App\Models\City;

// スーパークラスControllerを継承して独自のクラスを作成する
class SpotController extends Controller
{

    public function spotList(Request $request)
    {
        // $items = Spot::all();

        $city_id = $request->city_id;

        $items = Spot::city($city_id)->get();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'spots' => $items,
        ];

        // viewでfrontsフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('fronts.spots_list', $data);
    }

    public function spotInfo(Request $request)
    {
        $items = Spot::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'spots' => $items,
        ];

        // viewでfrontsフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('fronts.spots_info', $data);
    }

    public function facilityList(Request $request)
    {
        $items = Facility::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'facilities' => $items,
        ];

        // viewでfrontsフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('fronts.facilities_list', $data);
    }

    public function cityList(Request $request)
    {
        $items = City::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'cities' => $items,
        ];

        // viewでfrontsフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('fronts.cities_list', $data);
    }
}