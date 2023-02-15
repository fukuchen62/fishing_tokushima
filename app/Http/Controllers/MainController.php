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


// スーパークラスControllerを継承して独自のクラスを作成する
class MainController extends Controller
{

    /**
     * index
     * トップページ
     *
     * @return void
     */
    public function index()
    {
        return view('fronts.index');
    }


    /**
     * myPage
     * マイページテストget
     *
     * @return void
     */
    public function myPageShow(Request $request)
    {
        $msg1 = 'cookieはありません';
        $msg2 = 'cookieはありません';
        $msg3 = 'cookieはありません';

        if ($request->hasCookie('fish_id')) {
            $msg1 = 'cookie:' . $request->cookie('fish_id');
        }

        if ($request->hasCookie('spot_id')) {
            $msg2 = 'cookie:' . $request->cookie('spot_id');
        }

        if ($request->hasCookie('plan_id')) {
            $msg3 = 'cookie:' . $request->cookie('plan_id');
        }


        $data = [
            'msg1' => $msg1,
            'msg2' => $msg2,
            'msg3' => $msg3,
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
        // $validate_rule = [
        //     'msg' => 'required',
        // ];

        // $this->validate($request, $validate_rule);

        $fish_id = $request->fish_id;
        $spot_id = $request->spot_id;
        $plan_id = $request->plan_id;


        $data = [
            'msg1' => 'fish_id:「' . $fish_id . '」をcookieに保存しました。',
            'msg2' => 'spot_id:「' . $spot_id . '」をcookieに保存しました。',
            'msg3' => 'plan_id:「' . $plan_id . '」をcookieに保存しました。',
        ];

        $response = response()->view('fronts.mypage', $data);


        setcookie("fish_id[0]", $fish_id);
        setcookie("fish_id[1]", $spot_id);
        setcookie("fish_id[2]", $plan_id);

        // $cookie = [
        //     'key' => 'fish_id',
        //     'value' => $fish_id,
        //     'minit' => 100,
        // ];

        $val = $_COOKIE['cookie'];

        // $response->withCookie($cookie);

        // ->withCookie('spot_id', $spot_id, 100)
        // ->withCookie('plan_id', $plan_id, 100);

        return $response;

        // return response('fronts.mypage')->cookie(
        //     'msg',
        //     $msg,
        //     100,
        // );
    }

    /**
     * secapeList
     * 避難場所ページ
     *
     * @return void
     */
    public function escapeList()
    {
        $items = Evacuation::all();

        $data = [
            'evacuations' => $items,
        ];

        return view('fronts/escape_list', $data);
    }
}
