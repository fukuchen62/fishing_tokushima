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

use App\Models\Evacuation;


// cookieを使う
use Illuminate, Support, Facades, Cookie;

// モデル引用
use App\Models\Fish;
use App\Models\Spot;
use App\Models\Plan;
use App\Models\Shop;


// スーパークラスControllerを継承して独自のクラスを作成する
class MypageController extends Controller
{
    /**
     * myPage
     * お気に入りを読み込み
     *
     * @return void
     */
    public function myPageShow(Request $request)
    {
        // デフォルト
        $category = "spot";

        if (isset($request->category)) {
            $category = $request->category;
        }

        $spot_list = null;

        if ($category == "spot") {
            if ($request->hasCookie('spot_id')) {
                // $msg2 = 'cookie:' . $request->cookie('spot_id');

                $spot_id = explode(',', $request->cookie('spot_id'));

                foreach ($spot_id as $id) {
                    if ($id != 0) {
                        // spot情報を読み込む
                        $spotinfo = Spot::find($id);
                        // spot情報を配列に加える
                        $spot_list[] = $spotinfo;
                    }
                }
            }
        }


        $plan_list = null;

        if ($category == "plan") {
            if ($request->hasCookie('plan_id')) {
                // $msg3 = 'cookie:' . $request->cookie('plan_id');

                $plan_id = explode(',', $request->cookie('plan_id'));

                foreach ($plan_id as $id) {
                    if ($id != 0) {
                        // spot情報を読み込む
                        $planinfo = Plan::find($id);
                        // spot情報を配列に加える
                        $plan_list[] = $planinfo;
                    }
                }
            }
        }

        $data = [
            'spots' => $spot_list,
            'plans' => $plan_list,

            'category' => $category,
        ];

        return view('fronts.mypage', $data);
    }


    /**
     * myPage
     * お気に入りに書き込み
     *
     * @return void
     */
    public function myPage(Request $request)
    {
        $spot_id = "0,";
        $plan_id = "0,";


        // スポット------------------------------

        if ($request->spot_id != "") {

            // cookieがすでにあったら、
            if ($request->hasCookie('spot_id')) {
                $input1 = $request->spot_id;

                $spotid_list = $request->cookie('spot_id');

                // 配列に変換
                $spotid_array = explode(',', $spotid_list);

                // foreachで完全一致かどうか見る
                $flag_delete = 0;
                foreach ($spotid_array as $key => $value) {
                    // if ($value === 0) {
                    //     $spot_id = str_replace('0,', '', $spot_id);
                    // }

                    // お気に入りリストから該当IDを外す
                    if ($value == $input1) {
                        // $result = array_diff($spotid_array, array($input1,));
                        // $result = array_values($result);

                        array_splice($spotid_array, $key, 1);
                        $flag_delete = 1;
                    }
                }

                // 新規追加の場合は、
                if ($flag_delete == 0) {
                    array_push($spotid_array, $input1);
                }

                // 配列から文字列に変換
                $spot_id = implode(',', $spotid_array);


                // if (strpos($spot_id, $input1) !== false) {
                //     $spot_id = str_replace($input1, '0', $spot_id);
                // } else {
                //     $spot_id .= ',' . $input1;
                // }

                // if (strpos($spot_id, 0) !== false) {
                //     $spot_id = str_replace('0,', '', $spot_id);
                // }
            } else {
                $spot_id .= $request->spot_id;
            }

            $data = [
                'id' => $request->spot_id,
                'url' => 'spotsinfo',
                // 'spot_id' => $spot_id,
            ];

            $response = response()->view('fronts.cookie_save', $data);
            // １年保存
            $response->cookie('spot_id', $spot_id, 525600);
            return $response;
        }


        // プラン------------------------------

        if ($request->plan_id != "") {

            // cookieがすでにあったら、
            if ($request->hasCookie('plan_id')) {
                $input2 = $request->plan_id;

                $planid_list = $request->cookie('plan_id');

                // 配列に変換
                $planid_array = explode(',', $planid_list);

                // foreachで完全一致かどうか見る
                $flag_delete = 0;
                foreach ($planid_array as $key => $value) {
                    // if ($value === 0) {
                    //     $spot_id = str_replace('0,', '', $spot_id);
                    // }

                    // お気に入りリストから該当IDを外す
                    if ($value == $input2) {
                        // $result = array_diff($spotid_array, array($input1,));
                        // $result = array_values($result);

                        array_splice($planid_array, $key, 1);
                        $flag_delete = 1;
                    }
                }

                // 新規追加の場合は、
                if ($flag_delete == 0) {
                    array_push($planid_array, $input2);
                }

                // 配列から文字列に変換
                $plan_id = implode(',', $planid_array);


                // if (strpos($spot_id, $input1) !== false) {
                //     $spot_id = str_replace($input1, '0', $spot_id);
                // } else {
                //     $spot_id .= ',' . $input1;
                // }

                // if (strpos($spot_id, 0) !== false) {
                //     $spot_id = str_replace('0,', '', $spot_id);
                // }
            } else {
                $plan_id .= $request->plan_id;
            }

            $data = [
                'id' => $request->plan_id,
                'url' => 'plansinfo',
            ];

            $response = response()->view('fronts.cookie_save', $data);
            // １年保存
            $response->cookie('plan_id', $plan_id, 525600);
            return $response;
        }
    }
}
