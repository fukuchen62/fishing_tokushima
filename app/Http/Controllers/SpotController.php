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
        $items = Spot::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'spots' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.spots_list', $data);
    }

    public function facilityList(Request $request)
    {
        $items = Facility::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'facilities' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.facilities_list', $data);
    }

    public function cityList(Request $request)
    {
        $items = City::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'cities' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.cities_list', $data);
    }
}
