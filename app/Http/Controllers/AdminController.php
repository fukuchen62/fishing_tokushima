<?php
// 名前空間
namespace App\Http\Controllers;

// クラスをインポートする
//クライアントからのリクエストを受信するためのクラス
use Illuminate\Http\Request;

//クライアントへレスポンスするためのクラス
use App\Models\News;

use App\Models\Knowledge;

use App\Models\Fish;

use App\Models\Spot;

use App\Models\Plan;


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


    //news分

    public function newsShow(Request $request)
    {
        $items = News::all();
        return view('cms.back_news', ['items' => $items]);
    }

    public function newsEntry(Request $request)
    {
        return view('cms.back_news_new');
    }

    public function newsCreate(Request $request)
    {
        $this->validate($request, news::$rules);
        $news = new news();
        $form = $request->all();
        unset($form['_token']);
        $news->fill($form)->save();
        return redirect()->route('newsshow');
    }

    public function newsEdit(Request $request)
    {
        $news = News::find($request->id);
        return view('cms.back_news_edit', ['form' => $news]);
    }

    public function newsUpdate(Request $request)
    {
        $this->validate($request, News::$rules);
        $news = News::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $news->fill($form)->save();
        return redirect()->route('newsshow');
    }

    public function newsDelete(Request $request)
    {
        $news = News::find($request->id);
        return view('cms.back_news_edit', ['form' => $news]);
    }

    public function newsRemove(Request $request)
    {
        News::find($request->id)->delete();
        // return redirect('news_show');
        return redirect()->route('newsshow');
    }



    // Knowledgeテーブル関連
    public function knowledgeSearch(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('knowledge')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('sex', 'like', '%' . $s . "%")
                ->orWhere('mail', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('knowledge')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員一覧です。',
            // peopleから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];
        // return view('hello.index', $data);

        // リダイレクトでルート名を呼び出し
        return redirect()->route('knowledge_show');
    }

    public function knowledgeShow(Request $request)
    {
        $items = knowledge::all();
        return view('cms.back_knowledge', ['items' => $items]);
    }

    public function knowledgeEntry(Request $request)
    {
        return view('cms.back_knowledge_new');
    }

    public function knowledgeCreate(Request $request)
    {
        $this->validate($request, knowledge::$rules);
        $knowledge = new knowledge();
        $form = $request->all();
        unset($form['_token']);

        $knowledge->fill($form)->save();
        // return redirect('knowledge_show');
        return redirect()->route('knowledgeshow');
    }

    public function knowledgeEdit(Request $request)
    {
        $knowledge = knowledge::find($request->id);
        return view('cms.back_knowledge_edit', ['form' => $knowledge]);
    }

    public function knowledgeUpdate(Request $request)
    {
        $this->validate($request, knowledge::$rules);
        $knowledge = knowledge::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $knowledge->fill($form)->save();
        // return redirect('knowledge_show');
        return redirect()->route('knowledgeshow');
    }

    public function knowledgeDelete(Request $request)
    {
        $knowledge = knowledge::find($request->id);
        return view('cms.back_knowledge_edit', ['form' => $knowledge]);
    }

    public function knowledgeremove(Request $request)
    {
        knowledge::find($request->id)->delete();
        // return redirect('knowledge_show');
        return redirect()->route('knowledgeshow');
    }

    //spots分

    public function spotsSearch(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('spots')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('sex', 'like', '%' . $s . "%")
                ->orWhere('mail', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('spots')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されているショップ一覧です。',
            // spotsから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // リダイレクトでルート名を呼び出し
        return redirect()->route('back_spots');
    }


    //news分

    public function spotsShow(Request $request)
    {
        $items = Spot::all();
        return view('cms.back_spots', ['items' => $items]);
    }

    public function spotsEdit(Request $request)
    {
        $spots = Spot::find($request->id);
        return view('cms.back_spots_edit', ['form' => $spots]);
    }

    public function spotsUpdate(Request $request)
    {
        $this->validate($request, Spot::$rules);
        $spots = Spot::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $spots->fill($form)->save();
        return redirect()->route('spotsshow');
    }

    // fishテーブル関連
    public function fishShow(Request $request)
    {
        $items = Fish::all();
        return view('cms.back_fish', ['items' => $items]);
    }

    public function fishEntry(Request $request)
    {

        return view('cms.back_fish_new');
    }

    public function fishcreate(Request $request)
    {
        $this->validate($request, Fish::$rules);
        $fish = new fish;
        $form = $request->all();
        unset($form['_token']);
        $fish->fill($form)->save();
        return redirect()->route('fishshow');
    }


    public function fishEdit(Request $request)
    {
        $fish = Fish::find($request->id);
        return view('cms.back_fish_edit', ['form' => $fish]);
    }

    public function fishUpdate(Request $request)
    {
        $this->validate($request, Fish::$rules);
        $fish = Fish::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $fish->fill($form)->save();
        // return redirect('fish_Show');
        return redirect()->route('fishshow');
    }

    public function fishDelete(Request $request)
    {
        $fish = Fish::find($request->id);
        return view('cms.back_fish_edit', ['form' => $fish]);
    }

    public function fishRemove(Request $request)
    {
        Fish::find($request->id)->delete();
        return redirect()->route('fishshow');
    }

    //plan分

    public function planSearch(Request $request)
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
        return redirect()->route('back_plan');
    }


    public function planShow(Request $request)
    {
        $items = Plan::all();
        return view('cms.back_plan', ['items' => $items]);
    }

    public function planEntry(Request $request)
    {
        return view('cms.back_plan_new');
    }

    public function planCreate(Request $request)
    {
        $this->validate($request, plan::$rules);
        $plan = new plan();
        $form = $request->all();
        unset($form['_token']);
        $plan->fill($form)->save();
        return redirect()->route('planshow');
    }

    public function planEdit(Request $request)
    {
        $plan = Plan::find($request->id);
        return view('cms.back_plan_edit', ['form' => $plan]);
    }

    public function planUpdate(Request $request)
    {
        $this->validate($request, Plan::$rules);
        $plan = Plan::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $plan->fill($form)->save();
        return redirect()->route('planshow');
    }

    public function planDelete(Request $request)
    {
        $plan = Plan::find($request->id);
        return view('cms.back_plan_edit', ['form' => $plan]);
    }

    public function planRemove(Request $request)
    {
        Plan::find($request->id)->delete();
        // return redirect('plan_show');
        return redirect()->route('planshow');
    }

}


