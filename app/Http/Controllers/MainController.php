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



// スーパークラスControllerを継承して独自のクラスを作成する
class MainController extends Controller
{

    /**
     * index
     * トップページ
     *
     * @return void
     */
    public function index(Request $request)
    {
        $id = '';

        // idがあれば$idに代入
        if (isset($request->id)) {
            $id = $request->id;
        }

        // idで該当魚の情報を取得
        $item = Fish::find($id);


        // 釣れるスポットIDを取得
        $spot_id = $item->spot_id;
        if ($spot_id != '') {
            $spotid_list = explode(",", $spot_id);
        }

        // 釣れるスポットの情報を取得
        foreach ($spotid_list as $id) {
            // spot情報を読み込む
            $spotinfo = Spot::find($id);
            // spot情報を配列に加える
            $spot_list[] = $spotinfo;
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'item' => $item,
            'spots' => $spot_list,
            'fishlist' => $fish_list,
        ];

        return view('fronts.index1', $data);
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
    /**
     * praivacyPage
     * プライバシーポリシーページ
     *
     * @return void
     */
    public function praivacyPage()
    {
        return view('fronts/page_praivacy');
    }

    public function usPage()
    {
        return view('fronts/page_us');
    }
}
