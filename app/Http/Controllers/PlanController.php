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
    public function plansList()
    {
        $items = Plan::all();

        $data = [
            'plans' => $items,
        ];

        return view('fronts.plans_list', $data);
    }

    public function plansSearch(Request $request)
    {
        // $items = Plan::areaEqual($request->area)->get();
        // $items = Plan::levelEqual($request->level)->get;
        // $items = Plan::fishEqual($request->fish)->get;

        $items = Plan::areaEqual($request->area)
            ->levelEqual($request->level)
            ->fishEqual($request->fish)
            ->get();

        $data = [
            // 'area' => $request->area,
            // 'level' => $request->level,
            // 'fish' => $request->fish,
            'plans' => $items,
        ];

        return view('fronts.plans_list', $data);
    }

    // public function findPlan(Request $request)
    // {
    //     return view('main2.single_plan', ['input' => '']);
    // }

    public function plansInfo(Request $request)
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

        return view('fronts.plans_info', $data);
    }
}
