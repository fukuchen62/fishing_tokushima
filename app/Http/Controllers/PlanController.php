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

        $city_id = $request->area;
        $level_id = $request->level;
        $fish_id = $request->fish;

        // $queryに自動的に中身が入る
        $where = '';
        if ($city_id != null) {
            $where .= ' (city_id in( ' . implode(',', $city_id) . '))';
        }
        if ($level_id != null) {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' (level in( ' . implode(',', $level_id) . '))';
        }
        if ($fish_id != null) {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' ( fish_id in( ' . implode(',', $fish_id) . '))';
        }

        $items = DB::table('plans')->whereRaw($where)->get();
        // if ($city_id != null) {
        //     # code...
        // }
        // $items = Plan::scopeSearch($city_id, $level_id, $fish_id)
        //     ->get();
        $plans = "";

        // $plans = Plan::selectRaw('COUNT(plan_id) as count_plan')
        //     ->get();
        // {{-- 検索のエラー修正のため一度コメントアウトさせてもらいました --}}


        $data = [
            // 'area' => $request->area,
            // 'level' => $request->level,
            // 'fish' => $request->fish,
            'plans' => $items,
            'count_plan' => $plans,
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

        $connection1 = Plan::find(1);
        $connection2 = Plan::find(2);
        $connection3 = Plan::find(3);

        $data = [
            'item' => $item,
            'connection1' => $connection1,
            'connection2' => $connection2,
            'connection3' => $connection3,
        ];

        return view('fronts.plans_info', $data);
    }
}
