<?php
// 名前空間
namespace App\Http\Controllers;

// クラスをインポートする
//クライアントからのリクエストを受信するためのクラス
use Illuminate\Http\Request;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

// モデルを引用する
use App\Models\Fish;
use App\Models\Spot;



// スーパークラスControllerを継承して独自のクラスを作成する
class FishController extends Controller
{
    public function fishList(Request $request)
    {
        // $items = Fish::all();

        // 当月を取得
        $month = date('m');

        // date('m')が10〜12月の場合、$month=10,11,12をa,b,cに変更
        if (strpos($month, 10)) {
            $month = str_replace('10', 'a', $month);
        }
        if (strpos($month, 11)) {
            $month = str_replace('11', 'b', $month);
        }
        if (strpos($month, 12)) {
            $month = str_replace('12', 'c', $month);
        }
        // 10月じゃないかつ$monthに0が入っている場合、(首尾の)0をなくす
        if ($month != 10) {
            if (strpos($month, 0) !== false) {
                $month = str_replace('0', '', $month);
            }
        }
        // 月選択のボタンが押されることによって値がある場合、その値を$monthに代入
        if (isset($request->month)) {
            $month = $request->month;
        }

        // levelのデータを取得
        $level = $request->level;

        // fishモデルクラスのスコープを使って、検索データを取得
        $items = Fish::fish($month)->fish2($level)->get();
        // levelが4のデータを検索して取得
        $items2 = Fish::where('level', 4)->get();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'fishes' => $items,
            'fishes2' => $items2,
            'month' => $month,
        ];
        return view('fronts.fish_list', $data);
    }


    public function fishInfo(Request $request)
    {
        $table_id = '';

        // idがあれば$table_idに代入
        if (isset($request->id)) {
            $table_id = $request->id;
        }

        // $table_idで該当魚の情報を取得
        $item = Fish::find($table_id);


        // 釣れるスポットIDを取得
        $spot_id = $item->spot_id;
        if ($spot_id != '') {
            $spotid_list = explode(",", $spot_id);

            // 釣れるスポットの情報を取得
            foreach ($spotid_list as $id) {
                // spot情報を読み込む
                $spotinfo = Spot::find($id);
                // spot情報を配列に加える
                $spot_list[] = $spotinfo;
            }
        } else {
            $spot_list = null;
        }



        // 魚IDを取得
        $fish_id = $item->id;


        // 類似魚を取得する、ランダムに3つ取得
        $fish_list = Fish::where('id', '<>', $fish_id)
            ->where('level', '<>', 4)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'item' => $item,
            'spots' => $spot_list,
            'fishlist' => $fish_list,
        ];

        return view('fronts.fish_info', $data);
    }
}
