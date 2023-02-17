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
// use App\Models\Fish;
use App\Models\Spot;
use App\Models\Plan;


// スーパークラスControllerを継承して独自のクラスを作成する
class MypageController extends Controller
{
    /**
     * myPage
     * マイページテストget
     *
     * @return void
     */
    public function myPageShow(Request $request)
    {
        // $msg1 = 'cookieはありません';
        $msg2 = 'cookieはありません';
        $msg3 = 'cookieはありません';

        // if ($request->hasCookie('fish_id')) {
        //     $msg1 = 'cookie:' . $request->cookie('fish_id');
        // }


        $spot_list = null;

        if ($request->hasCookie('spot_id')) {
            $msg2 = 'cookie:' . $request->cookie('spot_id');

            $spot_id = explode(',', $request->cookie('spot_id'));

            foreach ($spot_id as $id) {
                // spot情報を読み込む
                $spotinfo = Spot::find($id);
                // spot情報を配列に加える
                $spot_list[] = $spotinfo;
            }
        }


        $plan_list = null;

        if ($request->hasCookie('plan_id')) {
            $msg3 = 'cookie:' . $request->cookie('plan_id');

            $plan_id = explode(',', $request->cookie('plan_id'));

            foreach ($plan_id as $id) {
                // spot情報を読み込む
                $planinfo = Plan::find($id);
                // spot情報を配列に加える
                $plan_list[] = $planinfo;
            }
        }


        // $cdata = [];
        // if ($request->hasCookie('fishing')) {
        //     $cdata = 'cookie:' . $request->cookie('fishing');
        // }

        $data = [
            'msg2' => $msg2,
            'msg3' => $msg3,

            'spots' => $spot_list,
            'plans' => $plan_list,

            // 'data' => $cdata,
        ];

        return view('fronts.mypage', $data);
    }


    /**
     * myPage
     * マイページ
     *
     * @return void
     */
    public function myPage(Request $request)
    {
        $spot_id = "";
        $plan_id = "";

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


        if ($request->spot_id != "") {
            $id = $request->spot_id;
        } elseif ($request->plan_id != "") {
            $id = $request->plan_id;
        }


        // $response = "";

        // $response = response()->view('fronts.plans_info');
        // $response->cookie('plan_id', $plan_id, 100);

        $data = [
            // 'msg1' => 'fish_id:「' . $fish_id . '」をcookieに保存しました。',
            // 'msg2' => 'spot_id:「' . $request->spot_id . '」をcookieに保存しました。' . $spot_id,
            // 'msg3' => 'plan_id:「' . $request->plan_id . '」をcookieに保存しました。' . $plan_id,

            // 'spots' => null,
            // 'plans' => null,

            'id' => $id,
            // 'response' => $response,
        ];



        if ($request->spot_id != "") {
            $response = response()->view('fronts.spots_info', $data);
            $response->cookie('spot_id', $spot_id, 100);
            // return view('fronts.spots_info', $data);
            return $response;
            return redirect()->route('spotsinfo', $data);
        } elseif ($request->plan_id != "") {
            $response = response()->view('fronts.plans_info', $data);
            $response->cookie('plan_id', $plan_id, 100);
            // return view('fronts.plans_info', $data);
            return $response;
            return redirect()->route('planinfo', $data);
        }


        // setcookie("fish_id", $fish_id);
        // setcookie("spot_id", $spot_id);
        // setcookie("plan_id", $plan_id);


        // $values = [
        //     'spots' => $spot_id,
        //     'plans' => $plan_id,
        // ];

        // $response->withCookie('fishing', $values, 60);

        // if ($request->spot_id != "") {
        //     $response->cookie('spot_id', $spot_id, 100);
        // }

        // if ($request->plan_id != "") {
        //     $response->cookie('plan_id', $plan_id, 100);
        // }
    }
    // return $response;
}
