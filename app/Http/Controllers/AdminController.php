<?php
// 名前空間
namespace App\Http\Controllers;

// クラスをインポートする
//クライアントからのリクエストを受信するためのクラス

use App\Models\Facility;

use Illuminate\Http\Request;

//クライアントへレスポンスするためのクラス
use App\Models\News;

use App\Models\Knowledge;

use App\Models\Fish;

use App\Models\Spot;

use App\Models\Shop;

use App\Models\Plan;

use App\Models\Evacuation;


// DBクラスをインポートする
use Illuminate\Support\Facades\DB;


// スーパークラスControllerを継承して独自のクラスを作成する
class AdminController extends Controller
{

    public function adminTop()
    {
        // 新着ニュースを読み込む
        $items = News::orderBy('id', 'desc')
            ->limit(4)
            ->get();

        // ニュース件数
        $news_count = News::whereNull('deleted_at')->count();
        // 魚件数
        $fish_count = Fish::whereNull('deleted_at')->count();
        // スッポト件数
        $spot_count = Spot::whereNull('deleted_at')->count();
        // 釣具屋件数
        $shop_count = Shop::whereNull('deleted_at')->count();
        // 体験プラン件数
        $plan_count = Plan::whereNull('deleted_at')->count();
        // 周辺施設件数
        $facility_count = Facility::all()->count();
        // 避難場所件数
        $excape_count = Evacuation::all()->count();
        // 入門知識件数
        $knowledge_count = Knowledge::whereNull('deleted_at')->count();

        $counts = [
            'news_count' => $news_count,
            'fish_count' => $fish_count,
            'spot_count' => $spot_count,
            'shop_count' => $shop_count,
            'plan_count' => $plan_count,
            'facility_count' => $facility_count,
            'excape_count' => $excape_count,
            'knowledge_count' => $knowledge_count,
        ];

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'news_list' => $items,
            'counts' => $counts,
        ];
        return view('cms.back_main', $data);
    }

    // news分
    public function newsSearch(Request $request)
    {
    }
    public function newsShow(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s != '') {
            // あいまい検索
            $items = DB::table('news')
                ->where('name', 'like', '%' . $s . "%")
                ->orWhere('title', 'like', '%' . $s . "%")
                ->orWhere('overview', 'like', '%' . $s . "%")
                ->orWhere('content', 'like', '%' . $s . "%")
                ->orWhere('eyecatch', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('news')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）

        $data = [
            'newslist' => $items,
        ];
        return view('cms.back_news', $data);

        $items = News::all();
        $data = [
            'newslist' => $items,
        ];
        return view('cms.back_news', $data);
    }

    public function newsEntry(Request $request)
    {
        return view('cms.back_news_new');
    }

    public function newsCreate(Request $request)
    {
        $this->validate($request, News::$rules);
        $news = new News();
        $form = $request->all();
        unset($form['_token']);
        $news->fill($form)->save();
        return redirect()->route('newsshow');
    }

    public function newsEdit(Request $request)
    {
        $item = News::find($request->id);
        $data = [
            'news' => $item,
        ];

        return view('cms.back_news_edit', $data);
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
        $item = News::find($request->id);
        $data = [
            'news' => $item,
        ];
        return view('cms.back_news_edit', $data);
    }

    public function newsRemove(Request $request)
    {
        News::find($request->id)->delete();
        return redirect()->route('newsshow');
    }



    // Knowledgeテーブル関連
    public function knowledgeSearch(Request $request)
    {
    }

    public function knowledgeShow(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s != '') {
            // あいまい検索
            $items = DB::table('knowledge')
                ->where('category_id', 'like', '%' . $s . "%")
                ->orWhere('title', 'like', '%' . $s . "%")
                ->orWhere('overview', 'like', '%' . $s . "%")
                // ->orWhere('content', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('knowledge')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）

        $data = [
            'knowledgelist' => $items,
        ];
        return view('cms.back_knowledge', $data);

        $items = Knowledge::all();
        $data = [
            'knowledgelist' => $items,
        ];
        return view('cms.back_knowledge', $data);
    }

    public function knowledgeEntry(Request $request)
    {
        return view('cms.back_knowledge_new');
    }

    public function knowledgeCreate(Request $request)
    {
        $this->validate($request, Knowledge::$rules);
        $knowledge = new Knowledge();
        $form = $request->all();
        unset($form['_token']);
        $knowledge->fill($form)->save();
        return redirect()->route('knowledgeshow');
    }

    public function knowledgeEdit(Request $request)
    {
        $item = Knowledge::find($request->id);
        $data = [
            'knowledge' => $item,
        ];
        return view('cms.back_knowledge_edit', $data);
    }

    public function knowledgeUpdate(Request $request)
    {
        $this->validate($request, Knowledge::$rules);
        $knowledge = Knowledge::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $knowledge->fill($form)->save();
        return redirect()->route('knowledgeshow');
    }

    public function knowledgeDelete(Request $request)
    {
        $item = Knowledge::find($request->id);
        $data = [
            'knowledge' => $item,
        ];
        return view('cms.back_knowledge_edit', $data);
    }

    public function knowledgeremove(Request $request)
    {
        Knowledge::find($request->id)->delete();
        return redirect()->route('knowledgeshow');
    }

    //spots分

    public function spotsSearch(Request $request)
    {
    }

    public function spotsShow(Request $request)
    {

        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s != '') {
            // あいまい検索
            $items = DB::table('spots')
                ->where('name', 'like', '%' . $s . "%")
                ->orWhere('overview', 'like', '%' . $s . "%")
                ->orWhere('city_id', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orWhere('spot_address', 'like', '%' . $s . "%")
                ->orWhere('toilet', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('spots')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'spotslist' => $items,
        ];
        return view('cms.back_spots', $data);

        $items = Spot::all();
        $data = [
            'spotslist' => $items,
        ];
        return view('cms.back_spots', $data);
    }

    public function spotsEdit(Request $request)
    {
        $item = Spot::find($request->id);
        $data = [
            'spot' => $item,
        ];
        return view('cms.back_spots_edit', $data);
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

    // shops分

    public function shopsSearch(Request $request)
    {
        // // クライアントから検索条件(s)を取得する
        // $s = "";
        // if (isset($request->s)) {
        //     $s = $request->s;
        // }

        // if ($s !== '') {
        //     // あいまい検索
        //     $items = DB::table('shops')
        //         ->where('id', 'like', '%' . $s . "%")
        //         ->orwhere('name', 'like', '%' . $s . "%")
        //         ->orWhere('sex', 'like', '%' . $s . "%")
        //         ->orWhere('mail', 'like', '%' . $s . "%")
        //         ->get();
        // } else {
        //     // 無条件
        //     $items = DB::table('shops')->get();
        // }

        // // テンプレートファイルに渡すデータ（連想配列）
        // $data = [
        //     'msg' => '登録されているショップ一覧です。',
        //     // shopsから読み込んだレコードをmembersの連想配列の中身とする
        //     'members' => $items,
        // ];

        // // リダイレクトでルート名を呼び出し
        // return redirect()->route('back_shops');
    }

    public function shopsShow(Request $request)
    {
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s != '') {
            // あいまい検索
            $items = DB::table('shops')
                ->where('name', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orWhere('address', 'like', '%' . $s . "%")
                ->orWhere('tel', 'like', '%' . $s . "%")
                ->orWhere('service_day', 'like', '%' . $s . "%")
                ->orWhere('service', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('shops')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員一覧です。',
            // peopleから読み込んだレコードをmembersの連想配列の中身とする
            'items' => $items,
        ];

        $items = Shop::all();
        return view('cms.back_shops', $data);
    }

    public function shopsEdit(Request $request)
    {
        $shops = Shop::find($request->id);
        return view('cms.back_shops_edit', ['form' => $shops]);
    }

    public function shopsUpdate(Request $request)
    {
        $this->validate($request, Shop::$rules);
        $shops = Shop::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $shops->fill($form)->save();
        return redirect()->route('shopsshow');
    }

    // fishテーブル関連
    public function fishSearch(Request $request)
    {
        // // クライアントから検索条件(s)を取得する
        // $s = "";
        // if (isset($request->s)) {
        //     $s = $request->s;
        // }

        // if ($s !== '') {
        //     // あいまい検索
        //     $items = DB::table('fish')
        //         ->where('id', 'like', '%' . $s . "%")
        //         ->orwhere('name', 'like', '%' . $s . "%")
        //         ->orWhere('sex', 'like', '%' . $s . "%")
        //         ->orWhere('mail', 'like', '%' . $s . "%")
        //         ->get();
        // } else {
        //     // 無条件
        //     $items = DB::table('fish')->get();
        // }

        // // テンプレートファイルに渡すデータ（連想配列）
        // $data = [
        //     'msg' => '登録されているショップ一覧です。',
        //     // fishから読み込んだレコードをmembersの連想配列の中身とする
        //     'members' => $items,
        // ];

        // // リダイレクトでルート名を呼び出し
        // return redirect()->route('back_fish');
    }

    public function fishShow(Request $request)
    {
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s != '') {
            // あいまい検索
            $items = DB::table('fish')
                ->where('name', 'like', '%' . $s . "%")
                ->orWhere('formal_name', 'like', '%' . $s . "%")
                ->orWhere('method', 'like', '%' . $s . "%")
                ->orWhere('month', 'like', '%' . $s . "%")
                ->orWhere('level', 'like', '%' . $s . "%")

                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('fish')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員一覧です。',
            // peopleから読み込んだレコードをmembersの連想配列の中身とする
            'items' => $items,
        ];

        $items = Fish::all();
        return view('cms.back_fish', $data);
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
