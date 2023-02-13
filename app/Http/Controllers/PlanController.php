<?php
// 名前空間
namespace App\Http\Controllers;

// クラスをインポートする
//クライアントからのリクエストを受信するためのクラス
use Illuminate\Http\Request;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

// モデルを引用する
use App\Models\Plan;



// スーパークラスControllerを継承して独自のクラスを作成する
class PlanController extends Controller
{
    public function searchPlan()
    {
        $items = Plan::all();

        $data = [
            'plans' => $items,
        ];

        return view('main2.search_plan', $data);
    }

    // public function findPlan(Request $request)
    // {
    //     return view('main2.single_plan', ['input' => '']);
    // }

    public function singlePlan(Request $request)
    {
        $id = '';

        // inputが入力されていたら、、、
        if (isset($request->id)) {
            $id = $request->id;
        }

        $item = Plan::find($id);

        $data = [
            'item' => $item,
        ];

        return view('main2.single_plan', $data);
    }
}
