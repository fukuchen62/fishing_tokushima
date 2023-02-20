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
        $msg2 = 'cookieはありません';
        $msg3 = 'cookieはありません';


        $spot_list = null;

        if ($request->hasCookie('spot_id')) {
            $msg2 = 'cookie:' . $request->cookie('spot_id');

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


        $plan_list = null;

        if ($request->hasCookie('plan_id')) {
            $msg3 = 'cookie:' . $request->cookie('plan_id');

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


        $data = [
            'msg2' => $msg2,
            'msg3' => $msg3,

            'spots' => $spot_list,
            'plans' => $plan_list,

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

        $item = "";


        // スポット------------------------------

        if ($request->spot_id != "") {

            $item = Spot::find($request->spot_id);

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


            // 関連フィッシュIDを取得
            $fish_id = $item->fish_id;
            if ($fish_id != '') {
                $fishid_list = explode(",", $fish_id);
            }
            // 関連フィッシュ情報を取得
            foreach ($fishid_list as $id) {
                // fish情報を読み込む
                $fishinfo = Fish::find($id);
                // fish情報を配列に加える
                $fish_list[] = $fishinfo;
            }

            // 関連ショップIDを取得
            $shop_id = $item->shop_id;
            if ($shop_id != '') {
                $shopid_list = explode(",", $shop_id);
            }
            // 関連ショップ情報を取得
            foreach ($shopid_list as $id) {
                // shop情報を読み込む
                $shopinfo = Shop::find($id);
                // shop情報を配列に加える
                $shop_list[] = $shopinfo;
            }

            $data = [
                'msg' => 'spot_id:「' . $request->spot_id . '」をcookieに保存しました。' . $spot_id,

                'spots' => $item,
                'fishlist' => $fish_list,
                'shoplist' => $shop_list,
                // 'spots' => null,
                // 'plans' => null,

                // 'id' => $id,
                // 'response' => $response,
            ];

            $response = response()->view('fronts.spots_info', $data);
            $response->cookie('spot_id', $spot_id, 100);
            // return view('fronts.spots_info', $data);
            return $response;
            // return redirect()->route('spotsinfo', $data);
        }


        // プラン------------------------------

        $connection1 = "";
        $connection2 = "";


        if ($request->plan_id != "") {

            $item = Plan::find($request->plan_id);

            // 関連プラン
            // whereで魚かスポットが一緒のやつを抜き出してくる

            $id1 = $item->fish_id;
            $id2 = $item->spot_id;

            $connection1 = Plan::where('fish_id', $id1)
                ->where('id', '<>', $request->plan_id)
                // ->limit(3)
                ->get();

            $connection2 = Plan::where('spot_id', $id2)
                ->where('id', '<>', $request->plan_id)
                // ->limit(3)
                ->get();


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
                'msg' => 'plan_id:「' . $request->plan_id . '」をcookieに保存しました。' . $plan_id,

                // 'spots' => null,
                // 'plans' => null,

                'item' => $item,
                'connection1' => $connection1,
                'connection2' => $connection2,

                // 'id' => $id,
                // 'response' => $response,
            ];

            // $response = response()->view('fronts.mypage', $data);
            $response = response()->view('fronts.plans_info', $data);
            $response->cookie('plan_id', $plan_id, 100);
            // return view('fronts.plans_info', $data);
            return $response;
            // return redirect()->route('plansinfo', $data);
        }


        // setcookie("fish_id", $fish_id);
        // setcookie("spot_id", $spot_id);
        // setcookie("plan_id", $plan_id);


        // $values = [
        //     'spots' => $spot_id,
        //     'plans' => $plan_id,
        // ];

        // $response->withCookie('fishing', $values, 60);

    }
}
