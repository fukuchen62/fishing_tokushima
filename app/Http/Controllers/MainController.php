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

use App\Models\Knowledge;

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
            $msg = 'cookie:' . $request->cookie('msg');
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
        $validate_rule = [
            'msg' => 'required',
        ];

        $this->validate($request, $validate_rule);

        $msg = $request->msg;

        $response = response()->view('fronts.mypage', ['msg' => '「' . $msg . '」をcookieに保存しました。']);

        $response->cookie('msg', $msg, 100);

        return $response;
    }
}
