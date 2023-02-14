<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'title' => 'required',
        'overview' => 'required',
        'content' => 'required'
    );

// 日本語エラーメッセージ
    public static $messages = [
        'name.required' => 'タイプは必ず入力してください。',
        'title.required' => 'タイトルは必ず入力してください。',
        'overview.required' => '概要は必ず入力してください。',
        'content.required' => '記事内容は必ず入力してください。',

];

    public function getData()
    {
        return $this->id . ': ' . $this->name . ': ' . $this->title . ': ' . $this->overview . ': ' . $this->content;
    }
}
