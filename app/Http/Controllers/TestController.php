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

// Auth
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\News;

// スーパークラスControllerを継承して独自のクラスを作成する
class TestController extends Controller
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // ログインチェック
        $this->middleware('auth');
    }

    public function newsList(Request $request)
    {
        $user = Auth::user();

        $items = News::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'user' => $user,
            'news' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('samples.news_list', $data);
    }

    /**
     * ログアウト
     *
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        // リダイレクトの生成
        return redirect()->route('newslist');
    }
}