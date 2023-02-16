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


        $spot_list = [];

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


        $plan_list = [];

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
            $spot_id = $request->cookie('spot_id');
            $spot_id .= ',' . $request->spot_id;
        } else {
            $spot_id .= $request->spot_id;
        }

        if ($request->hasCookie('plan_id')) {
            $plan_id = $request->cookie('plan_id');
            $plan_id .= ',' . $request->plan_id;
        } else {
            $plan_id .= $request->plan_id;
        }


        $data = [
            // 'msg1' => 'fish_id:「' . $fish_id . '」をcookieに保存しました。',
            'msg2' => 'spot_id:「' . $request->spot_id . '」をcookieに保存しました。',
            'msg3' => 'plan_id:「' . $request->plan_id . '」をcookieに保存しました。',

            'spots' => "",
            'plans' => "",

        ];

        $response = response()->view('fronts.mypage', $data);


        // setcookie("fish_id", $fish_id);
        // setcookie("spot_id", $spot_id);
        // setcookie("plan_id", $plan_id);


        // $values = [
        //     'spots' => $spot_id,
        //     'plans' => $plan_id,
        // ];

        // $response->withCookie('fishing', $values, 60);

        $response->cookie('spot_id', $spot_id, 100);
        $response->cookie('plan_id', $plan_id, 100);

        return $response;
    }
}
