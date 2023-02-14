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

// スーパークラスControllerを継承して独自のクラスを作成する
class KnowledgeController extends Controller
{

    public function knowledgeList(Request $request)
    {
        // $items = Knowledge::all();
        $category_id = $request->category_id;

        $items = KnowledgeController::getCategory($category_id);

        $data = [
            'knowledges' => $items,
        ];

        return view('fronts.knowledge_list', $data);
    }

    public function knowledgeInfo(Request $request)
    {
        $items = Knowledge::find($request->id);

        $data = [
            'knowledges' => $items,
        ];

        return view('fronts.knowledge_info', $data);
    }

    public function getCategory($cateId)
    {
        $knowledges = knowledge::category($cateId)->get();
        return $knowledges;
    }
}