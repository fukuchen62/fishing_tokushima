<?php
// 名前空間
namespace App\Http\Controllers;

// クラスをインポートする
//クライアントからのリクエストを受信するためのクラス
use Illuminate\Http\Request;

//クライアントへレスポンスするためのクラス
use App\Models\News;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;


// スーパークラスControllerを継承して独自のクラスを作成する
class AdminController extends Controller
{

    public function newsSearch(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('people')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('sex', 'like', '%' . $s . "%")
                ->orWhere('mail', 'like', '%' . $s . "%")
                ->get();

        } else {
            // 無条件
            $items = DB::table('people')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員一覧です。',
            // peopleから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];
        // return view('hello.index', $data);

        // リダイレクトでルート名を呼び出し
        return redirect()->route('back_news');
    }

    public function newsShow(Request $request)
    {
        $items = News::all();
        return view('back.back_news', ['items' => $items]);
    }

    public function newsEntry(Request $request)
    {

        return view('back.back_news_new');
    }

    public function create(Request $request)
    {
        $this->validate($request, news::$rules);
        $news = new news;
        $form = $request->all();
        unset($form['_token']);
        $news->fill($form)->save();
        return redirect('/back');
    }

    public function newsEdit(Request $request)
{
    $news = News::find($request->id);
    return view('back.back_news_edit', ['form' => $news]);
}

    public function update(Request $request)
{
    $this->validate($request, News::$rules);
    $news = News::find($request->id);
    $form = $request->all();
    unset($form['_token']);
    $news->fill($form)->save();
    return redirect('/back');
}

    public function delete(Request $request)
{
    $news = News::find($request->id);
    return view('back.back_news_edit', ['form' => $news]);
}

}
