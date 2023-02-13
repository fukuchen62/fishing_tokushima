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

        return view('main2.search_fish', $data);
    }
}