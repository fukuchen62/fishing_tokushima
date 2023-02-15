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

        $month = $request->month;
        $level = $request->level;

        // fishモデルクラスのスコープを使って、検索データを取得
        $items = Fish::fish($month)->fish2($level)->get();
        // levelが4のデータを検索して取得
        $items2 = Fish::where('level', 4)->get();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'fishes' => $items,
            'fishes2' => $items2,
        ];
        return view('fronts.fish_list', $data);
    }


    public function fishInfo(Request $request)
    {
        $id = '';

        // idがあれば$idに代入
        if (isset($request->id)) {
            $id = $request->id;
        }

        // idで該当魚の情報を取得
        $item = Fish::find($id);


        // 関連スポットIDを取得
        $spot_id = $item->spot_id;
        if ($spot_id != '') {
            $spotid_list = explode(",", $spot_id);
        }

        // 関連スポットの情報を取得
        foreach ($spotid_list as $id) {
            // spot情報を読み込む
            $spotinfo = Spot::find($id);
            // spot情報を配列に加える
            $spot_list[] = $spotinfo;
        }


        // 類似魚を取得する、ランダムに3つ取得
        $fish_list = Fish::where('level', '<>', 4)
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