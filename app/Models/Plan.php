<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    // テストのために使用
    // public function getData()
    // {
    //     $ret = $this->id . ':' . $this->title;
    //     return $ret;
    // }

    // スコープ
    public function scopeSearch($query, $area, $level, $fish)
    {
        // $queryに自動的に中身が入る
        $where = '';
        if ($area != null) {
            $where .= ' ( city_id IN ' . $area . ')';
        }
        if ($level != null) {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' (level IN ' . $level . ')';
        }
        if ($fish != null) {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' ( fish_id IN ' . $fish . ')';
        }

        $ret = $query->where($where);

        return $ret;
    }


    // // 地域
    // public function scopeAreaEqual($query, $area)
    // {
    //     // $queryに自動的に中身が入る
    //     return $query->where('city_id', $area);
    //     // areaが$areaという値のデータが渡される（インスタンス）
    // }

    // // 難易度
    // public function scopeLevelEqual($query, $level)
    // {
    //     return $query->where('level', $level);
    // }

    // // 魚
    // public function scopeFishEqual($query, $fish)
    // {
    //     return $query->where('fish_id', $fish);
    // }

    public function spot()
    {
        return $this->belongsTo('App\Models\Spot');
    }

    public function fish()
    {
        return $this->belongsTo('App\Models\Fish');
    }
}
