<?php
// 名前空間
namespace App\Http\Controllers;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

// モデルを引用する
use App\Models\Fish;



// スーパークラスControllerを継承して独自のクラスを作成する
class FishController extends Controller
{
    public function searchFish()
    {
        $items = Fish::all();

        $data = [
            'fishes' => $items,
        ];

        return view('fronts.fish_list', $data);
    }

    public function singleFish(Request $request)
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