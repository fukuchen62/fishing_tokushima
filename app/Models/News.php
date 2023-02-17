<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name'     => 'required|string|max:10',
        'title'    => 'required|string|max:50',
        'overview' => 'required|string|max:150',
        'content'  => 'required|string',
        'eyecatch' => 'string|max:200'
    );

    // 日本語エラーメッセージ
    public static $messages = [
        'name.required'     => 'カテゴリー名は必ず入力してください。',
        'title.required'    => 'タイトルは必ず入力してください。',
        'overview.required' => '概要は必ず入力してください。',
        'content.required'  => '詳細内容は必ず入力してください。',
    ];

    public function getData()
    {
        return $this->id . ': ' . $this->name . ': ' . $this->title . ': ' . $this->overview . ': ' . $this->content;
    }

    public function scopeNewsName($query, $newsName)
    {
        return $query->where('name', $newsName);
    }

    // public function scopeNews($query, $input)
    // {
    //     $ret = $query->where('title', $input)
    //         ->where('overview', $input)
    //         ->where('content', $input);
    //     return $ret;
    // }

    // スコープ

    // カテゴリ
    public function scopeCategory($query, $name)
    {
        return $query->where('name',$name);
    }
}
