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


// スーパークラスControllerを継承して独自のクラスを作成する
class Main2Controller extends Controller
{

    public function serchPlan(Request $request)
    {
        $items = Plan::all();

        $data = [
            'plans' => $items,
        ];

        return view('main2.search_plan', $data);
    }
}
