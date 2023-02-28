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

use App\Models\Knowledge;
use App\Models\KnowledgeType;

// スーパークラスControllerを継承して独自のクラスを作成する
class KnowledgeController extends Controller
{
    /**
     * knowledgeList
     * 入門知識の一覧
     *
     * @param Request $request
     * @return void
     */
    public function knowledgeList(Request $request)
    {

        $category_id = 1;

        if (isset($request->category_id)) {
            $category_id = $request->category_id;
        }

        $items = Knowledge::Category($category_id)
            ->simplePaginate(6);


        $page = "";

        if (isset($request->page)) {
            $page = $request->page;
        }

        $data = [
            'knowledges' => $items,
            'category_id' => $category_id,
            'page' => $page,
        ];

        return view('fronts.knowledge_list', $data);
    }
    /**
     * knowledgeInfo
     * 入門知識の詳細
     *
     * @param Request $request
     * @return void
     */
    public function knowledgeInfo(Request $request)
    {
        $items = Knowledge::find($request->id);

        // 関連記事を取得する、ランダムに3つ取得
        $connection_list = Knowledge::where('category_id', $items->category_id)
            ->where('id', '<>', $items->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        // カテゴリー名を取得する
        $category = KnowledgeType::where('id', $items->category_id)
            ->first();

        $data = [
            'knowledges' => $items,
            'connection_list' => $connection_list,
            'category' => $category,
        ];

        return view('fronts.knowledge_info', $data);
    }
    // /**
    //  * getCategory
    //  * カテゴリーIDごとに絞り込む関数
    //  *
    //  * @param [type] $cateId
    //  * @return void
    //  */
    // public function getCategory($cateId)
    // {
    //     $knowledges = knowledge::category($cateId)->get();
    //     return $knowledges;
    // }
}
