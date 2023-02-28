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
        $city_id = null;
        $level_id = null;
        $fish_id = null;

        $items = Plan::all();

        $data = [
            'plans' => $items,
            'city_id' => $city_id,
            'level_id' => $level_id,
            'fish_id' => $fish_id,
        ];

        return view('fronts.plans_list', $data);
    }

    public function plansSearch(Request $request)
    {
        // $items = Plan::areaEqual($request->area)->get();
        // $items = Plan::levelEqual($request->level)->get;
        // $items = Plan::fishEqual($request->fish)->get;

        if (isset($request->area)) {
            $city_id = $request->area;
        }

        if (isset($request->level)) {
            $level_id = $request->level;
        }

        if (isset($request->fish)) {
            $fish_id = $request->fish;
        }


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

        $data = [
            'plans' => $items,
            'city_id' => $city_id,
            'level_id' => $level_id,
            'fish_id' => $fish_id,
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

        if (isset($request->id)) {
            $id = $request->id;
        }
        if (isset($request->plan_id)) {
            $id = $request->plan_id;
        }

        $item = Plan::find($id);


        // 関連プラン
        // whereで魚かスポットが一緒のやつを抜き出してくる

        $id1 = $item->fish_id;
        $id2 = $item->spot_id;

        $connection1 = Plan::where('fish_id', $id1)
            ->where('id', '<>', $id)
            ->limit(3)
            ->get();

        $connection2 = Plan::where('spot_id', $id2)
            ->where('id', '<>', $id)
            ->limit(3)
            ->get();


        // cookieお気に入り保存
        // if ($request->plan_id != "") {
        //     $plan_id = "";


        //     if ($request->hasCookie('plan_id')) {
        //         $input = $request->plan_id;

        //         $plan_id = $request->cookie('plan_id');

        //         if (strpos($plan_id, $input) !== false) {
        //             $plan_id = str_replace($input, '0', $plan_id);
        //         } else {
        //             $plan_id .= ',' . $input;
        //         }

        //         if (strpos($plan_id, 0) !== false) {
        //             $plan_id = str_replace('0,', '', $plan_id);
        //         }
        //     } else {
        //         $plan_id .= $request->plan_id;
        //     }
        // }


        $data = [
            'item' => $item,
            'connection1' => $connection1,
            'connection2' => $connection2,
            'id' => $id,
        ];

        return view('fronts.plans_info', $data);


        // if ($request->plan_id != "") {
        //     $response = response()->view('fronts.plans_info', $data);
        //     $response->cookie('plan_id', $plan_id, 100);
        //     // return view('fronts.plans_info', $data);
        //     return $response;
        //     // return redirect()->route('plansinfo', $data);
        // }
    }
}
