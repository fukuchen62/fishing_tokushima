<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'category_id' => 'required',
        'title' => 'required',
        'thumbnail' => 'required',
        'is_show' => 'required'
    );

// 日本語エラーメッセージ
public static $messages = [
    'category_id.required' => 'カテゴリーIDは必ず入力してください。',
    'title.required' => 'タイトルは必ず入力してください。',
    'thumbnail.required' => 'サムネ画像は必ず入力してください。',
    'is_show.required' => '表示フラグは必ず入力してください。'

];

    /**
     * getData
     *
     * @return void
     */
    public function getData()
    {
        $ret = $this->id . ':' . $this->title . ':' . $this->overview . ':' . $this->content;
        return $ret;
    }

    // スコープ
    // カテゴリーID



    /**
     * knowlegeType
     *指定メンバーに属する1つの記事を取得する

     * @return void
     */
    public function knowledgeType()
    {
        return $this->hasOne('App\Models\KnowledgeTypes');
    }
    /**
     * KnowlegeTypes
     *指定メンバーに属するすべて（複数）の記事を取得する

     * @return void
     */
    public function knowledgeTypes()
    {
        return $this->hasMany('App\Models\KnowledgeTypes');
    }
}
