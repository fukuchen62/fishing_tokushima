<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;


    // スコープ
    //地域、難易度、魚
    // public function scopeAreaEqual($query, $area)
    // {
    //     // 名前で検索という意味のメソッド名
    //     // $queryに自動的に中身が入る
    //     return $query->where('fish_id'->'city_id', $area);
    //     // nameが$strという値のデータが渡される（インスタンス）
    // }
}
