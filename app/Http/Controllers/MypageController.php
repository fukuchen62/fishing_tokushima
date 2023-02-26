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
        $spot_id = "";
        $plan_id = "";


        // スポット------------------------------

        if ($request->spot_id != "") {

            if ($request->hasCookie('spot_id')) {
                $input = $request->spot_id;

                $spot_id = $request->cookie('spot_id');

                if (strpos($spot_id, $input) !== false) {
                    $spot_id = str_replace($input, '0', $spot_id);
                } else {
                    $spot_id .= ',' . $input;
                }

                if (strpos($spot_id, 0) !== false) {
                    $spot_id = str_replace('0,', '', $spot_id);
                }
            } else {
                $spot_id .= $request->spot_id;
            }

            $data = [
                'id' => $request->spot_id,
                'url' => 'spotsinfo',
            ];

            $response = response()->view('fronts.cookie_save', $data);
            $response->cookie('spot_id', $spot_id, 100);
            return $response;
        }


        // プラン------------------------------


        if ($request->plan_id != "") {

            if ($request->hasCookie('plan_id')) {
                $input = $request->plan_id;

                $plan_id = $request->cookie('plan_id');

                if (strpos($plan_id, $input) !== false) {
                    $plan_id = str_replace($input, '0', $plan_id);
                } else {
                    $plan_id .= ',' . $input;
                }

                if (strpos($plan_id, 0) !== false) {
                    $plan_id = str_replace('0,', '', $plan_id);
                }
            } else {
                $plan_id .= $request->plan_id;
            }

            $data = [
                'id' => $request->plan_id,
                'url' => 'plansinfo',
            ];

            $response = response()->view('fronts.cookie_save', $data);
            $response->cookie('plan_id', $plan_id, 100);
            return $response;
        }
    }
}
