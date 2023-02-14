<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function getData()
    {
        $ret = $this->id . ':' . $this->title;
        return $ret;
    }


    // スコープ

    // 地域
    public function scopeAreaEqual($query, $area)
    {
        // $queryに自動的に中身が入る
        return $query->where('city_id', $area);
        // areaが$areaという値のデータが渡される（インスタンス）
    }

    // 難易度
    public function scopeLevelEqual($query, $level)
    {
        return $query->where('level', $level);
    }

    // 魚
    public function scopeFishEqual($query, $fish)
    {
        return $query->where('fish_id', $fish);
    }
}
