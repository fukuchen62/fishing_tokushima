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


// スーパークラスControllerを継承して独自のクラスを作成する
class MainController extends Controller
{

    public function archiveHowto(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('facilities')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('type', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orwhere('address', 'like', '%' . $s . "%")
                ->orWhere('tel', 'like', '%' . $s . "%")
                ->orWhere('longitude', 'like', '%' . $s . "%")
                ->orwhere('latitude', 'like', '%' . $s . "%")
                ->orWhere('memo', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('facilities')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('archive_howto', $data);
    }

    public function singleHowto(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('facilities')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('type', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orwhere('address', 'like', '%' . $s . "%")
                ->orWhere('tel', 'like', '%' . $s . "%")
                ->orWhere('longitude', 'like', '%' . $s . "%")
                ->orwhere('latitude', 'like', '%' . $s . "%")
                ->orWhere('memo', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('facilities')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('singleHowto', $data);
    }

    public function archiveSpot(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('facilities')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('type', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orwhere('address', 'like', '%' . $s . "%")
                ->orWhere('tel', 'like', '%' . $s . "%")
                ->orWhere('longitude', 'like', '%' . $s . "%")
                ->orwhere('latitude', 'like', '%' . $s . "%")
                ->orWhere('memo', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('facilities')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('archiveSpot', $data);
    }

    public function archiveArea(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('facilities')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('type', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orwhere('address', 'like', '%' . $s . "%")
                ->orWhere('tel', 'like', '%' . $s . "%")
                ->orWhere('longitude', 'like', '%' . $s . "%")
                ->orwhere('latitude', 'like', '%' . $s . "%")
                ->orWhere('memo', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('facilities')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('archiveArea', $data);
    }

    public function singleArea(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('facilities')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('type', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orwhere('address', 'like', '%' . $s . "%")
                ->orWhere('tel', 'like', '%' . $s . "%")
                ->orWhere('longitude', 'like', '%' . $s . "%")
                ->orwhere('latitude', 'like', '%' . $s . "%")
                ->orWhere('memo', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('facilities')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('singleArea', $data);
    }

    public function pageShop(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('facilities')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('type', 'like', '%' . $s . "%")
                ->orWhere('postal_code', 'like', '%' . $s . "%")
                ->orwhere('address', 'like', '%' . $s . "%")
                ->orWhere('tel', 'like', '%' . $s . "%")
                ->orWhere('longitude', 'like', '%' . $s . "%")
                ->orwhere('latitude', 'like', '%' . $s . "%")
                ->orWhere('memo', 'like', '%' . $s . "%")
                ->orWhere('is_show', 'like', '%' . $s . "%")
                ->get();
        } else {
            // 無条件
            $items = DB::table('facilities')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員記事一覧です。',
            // facilitiesから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('pageShop', $data);
    }
}