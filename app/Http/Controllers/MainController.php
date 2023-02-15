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
        $msg = 'cookieはありません';

        if ($request->hasCookie('msg')) {
            $msg = 'cookie:' . $request->cookie('fish_id');
        } else {
            $msg = 'cookieはありません';
        }

        $data = [
            'msg' => $msg,
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

        $id = $request->id;

        $data = [
            'msg' => '「' . $id . '」をcookieに保存しました。'
        ];

        $response = response()->view('fronts.mypage', $data);

        $response->withCookie('fish_id', $id, 100);

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
