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



// スーパークラスControllerを継承して独自のクラスを作成する
class FishController extends Controller
{
    public function fishList(Request $request)
    {
        // $items = Fish::all();

        $month = $request->month;
        $level = $request->level;

        $items = Fish::fish($month)->get();
        $items2 = Fish::fish2($level)->get();

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

        // inputが入力されていたら、、、
        if (isset($request->id)) {
            $id = $request->id;
        }

        $item = Fish::find($id);

        $data = [
            'item' => $item,
        ];

        return view('fronts.fish_info', $data);
    }
}