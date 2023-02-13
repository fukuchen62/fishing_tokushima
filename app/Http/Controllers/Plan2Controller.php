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

        return view('fronts.plans_list', $data);
    }

    // public function findPlan(Request $request)
    // {
    //     return view('main2.single_plan', ['input' => '']);
    // }

    public function singlePlan(Request $request)
    {
        $input = '';

        // inputが入力されていたら、、、
        if (isset($request->input)) {
            $input = $request->input;
        }

        $item = Plan::find($input);

        $data = [
            'input' => $input,
            'item' => $item,
        ];

        return view('fronts.plans_info', $data);
    }
}