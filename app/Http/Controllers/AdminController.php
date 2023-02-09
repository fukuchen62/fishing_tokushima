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
class HelloController extends Controller
{

    public function index(Request $request)
    {
        // クライアントから検索条件(s)を取得する
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        // // 取得した検索条件を各々パラメータに代入する
        // $params = [
        //     'id' => $id,
        // ];

        // // データベースのpeopleのテーブルからデータを読み込む
        // // SQL文を記述
        // $sql = "SELECT * FROM people ";
        // if ($id > 0) {
        //     $sql .= 'WHERE id=:id ';
        // }

        // // DBクラスのメッソドにSQL文を代入して実行する
        // if ($id > 0) {
        //     $items = DB::select($sql, $params);
        // } else {
        //     $items = DB::select($sql);
        // }

        // クエリビルダを利用して、peopleデータを取得
        // $items = DB::select("SELECT * FROM people");

        if ($s !== '') {
            // あいまい検索
            $items = DB::table('people')
                ->where('id', 'like', '%' . $s . "%")
                ->orwhere('name', 'like', '%' . $s . "%")
                ->orWhere('sex', 'like', '%' . $s . "%")
                ->orWhere('mail', 'like', '%' . $s . "%")
                ->get();

            // if (!is_null($item)) {
            //     // 読み込んできたレコードを$items配列に追加
            //     $items[] = $item;
            // } else {
            //     $items = DB::table('people')->get();
            // }

        } else {
            // 無条件
            $items = DB::table('people')->get();
        }

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => '登録されている会員一覧です。',
            // peopleから読み込んだレコードをmembersの連想配列の中身とする
            'members' => $items,
        ];

        // viewでhelloフォルダにあるindex.phpを呼び出し、
        // $dataを渡して、関連Webページを作成して、
        // クライアントに戻す
        return view('hello.index', $data);
    }

    /**
     * createアクション
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        // バリデーションルールの配列を作成
        $vatlidate_rule = [
            'name' => 'required',       //必須項目チェック
            'mail' => 'email',          //メールアドレスの書式チェック
            // 'birthday' => 'date',          //日付書式チェック
            'age' => 'numeric|between:0,150',
        ];

        // 日本語エラーメッセージ
        $messages = [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスは正しくではありません。',
            'birthday.date' => '生年月日は日付になっていません。',
            'age.numeric' => '年齢は数字で入力してください。',
            'age.between' => '年齢は０から150までで入力してください。',
        ];

        // バリデーションを行う
        $this->validate($request, $vatlidate_rule, $messages);

        // 入力フォームで送られたメッセージを受信する
        $params = [
            'name' => $request->name,               //名前
            'sex' => $request->sex,                 //性別
            // 'birthday' => $request->birthday,       //生年月日
            'age' => $request->age,                 //年齢
            'mail' => $request->mail,               //メールアドレス
            // 'pref' => $request->pref,               //都道府県
            // 'address' => $request->address,         //住所
            // 'memo' => $request->memo,               //備考
        ];

        // INSERT文
        $sql = "INSERT INTO ";
        $sql .= "people ";
        $sql .= "( name,sex,age,mail ) ";
        $sql .= "VALUES( ";
        $sql .= ":name, ";
        $sql .= ":sex, ";
        $sql .= ":age, ";
        $sql .= ":mail ";
        $sql .= " ) ";

        // SQL文を実行する
        DB::insert($sql, $params);

        // トップページに戻す
        return redirect('hello');

        $data = [
            'msg' => '以下のメンバーの情報を正常に登録しました。',
            'member_info' => $params,
        ];
        return view('hello.result', $data);
    }

    /**
     * add アクション
     *
     * @return void
     */
    public function add()
    {
        $data = [
            'msg' => 'メンバーの情報を入力して、登録ボタンをクリックしてください。',
        ];
        return view('hello.add', $data);
    }

    /**
     * edit アクション
     *
     * @return void
     */
    public function edit(Request $request)
    {
        // 編集する指定メンバーの情報を読み込む
        // クライアントから検索条件(id)を取得する
        $id = 0;
        if (isset($request->id)) {
            $id = $request->id;
        }

        // 取得した検索条件を各々パラメータに代入する
        $params = [
            'id' => $id,
        ];

        // データベースのpeopleのテーブルからデータを読み込む
        // SQL文を記述
        $sql = "SELECT * FROM people ";
        $sql .= 'WHERE id=:id ';

        // DBクラスのメッソドにSQL文を代入して実行する
        $item = DB::select($sql, $params);

        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            'msg' => 'メンバーの情報を編集して、登録ボタンをクリックしてください。',
            // peopleから読み込んだレコードをmemberの連想配列の中身とする
            'form' => $item[0],
        ];

        return view('hello.edit', $data);
    }

    /**
     * deleteアクション
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        // 削除するメンバーのIDを取得して、Paramsに代入
        $params = [
            'id' => $request->id,               //id
        ];

        // DELETE文
        $sql = "DELETE FROM ";
        $sql .= "people ";
        $sql .= "WHERE ";
        $sql .= "id=:id ";

        // SQL文を実行する
        DB::delete($sql, $params);

        // トップページに戻す
        return redirect('hello');
    }

    /**
     * updateアクション
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        // バリデーションルールの配列を作成
        $vatlidate_rule = [
            'name' => 'required',       //必須項目チェック
            'mail' => 'email',          //メールアドレスの書式チェック
            // 'birthday' => 'date',          //日付書式チェック
            'age' => 'numeric|between:0,150',
        ];

        // 日本語エラーメッセージ
        $messages = [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスは正しくではありません。',
            'birthday.date' => '生年月日は日付になっていません。',
            'age.numeric' => '年齢は数字で入力してください。',
            'age.between' => '年齢は０から150までで入力してください。',
        ];

        // バリデーションを行う
        $this->validate($request, $vatlidate_rule, $messages);

        // 入力フォームで送られたメッセージを受信する
        $params = [
            'id' => $request->id,               //id
            'name' => $request->name,               //名前
            'sex' => $request->sex,                 //性別
            // 'birthday' => $request->birthday,       //生年月日
            'age' => $request->age,                 //年齢
            'mail' => $request->mail,               //メールアドレス
            // 'pref' => $request->pref,               //都道府県
            // 'address' => $request->address,         //住所
            // 'memo' => $request->memo,               //備考
        ];

        // UPDATE文
        $sql = "UPDATE ";
        $sql .= "people ";
        $sql .= "SET ";
        $sql .= "name=:name, ";
        $sql .= "sex=:sex, ";
        $sql .= "age=:age, ";
        $sql .= "mail=:mail ";
        $sql .= "WHERE ";
        $sql .= "id=:id ";

        // SQL文を実行する
        DB::update($sql, $params);

        // トップページに戻す
        return redirect('hello');
    }
}