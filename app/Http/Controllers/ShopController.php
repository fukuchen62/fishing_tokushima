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

use App\Models\Shop;

// スーパークラスControllerを継承して独自のクラスを作成する
class ShopController extends Controller
{

    public function pageShop(Request $request)
    {
        $items = Shop::all();

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'shops' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.page_shop', $data);
    }

    public function singleHowto(Request $request)
    {
        $items = [];

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            // 'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.single_howto', $data);
    }

    public function archiveSpot(Request $request)
    {
        $items = [];

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            // 'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.archive_spot', $data);
    }

    public function archiveArea(Request $request)
    {
        $items = [];

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            // 'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.archive_area', $data);
    }

    public function singleArea(Request $request)
    {
        $items = [];

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            // 'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('main.single_area', $data);
    }

    // public function pageShop(Request $request)
    // {
    //     $items = [];

    //     // テンプレートファイルに渡すデータ（連想配列）
    //     $data = [
    //         'msg' => '登録されている会員記事一覧です。',
    //         // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
    //         // 'members' => $items,
    //     ];

    //     // viewでhelloフォルダにあるindex.phpを呼び出し、
    //     // $dataを渡して、関連Webページを作成して、
    //     // クライアントに戻す
    //     return view('main.page_shop', $data);
    // }
}
