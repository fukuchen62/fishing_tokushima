<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public static $rules = array(

    );

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


    public function getLevel()
    {
        $ret = $this->level;
        if (strstr($ret, '1')) {
            $ret = str_replace('1', '<div><p>img1</p></div>', $ret);
        }
        if (strstr($ret, '2')) {
            $ret = str_replace('2', '<div><p>img2</p></div>', $ret);
        }
        if (strstr($ret, '3')) {
            $ret = str_replace('3', '<div><p>img3</p></div>', $ret);
        }
        return $ret;
    }

    // public function getCityId()
    // {
    //     $ret = $this->level;
    //     if (strstr($ret, '1')) {
    //         $ret = str_replace('1', '<div><p>img1</p></div>', $ret);
    //     }
    //     if (strstr($ret, '2')) {
    //         $ret = str_replace('2', '<div><p>img2</p></div>', $ret);
    //     }
    //     if (strstr($ret, '3')) {
    //         $ret = str_replace('3', '<div><p>img3</p></div>', $ret);
    //     }
    //     return $ret;
    // }


    // リレーション
    public function spot()
    {
        return $this->belongsTo('App\Models\Spot');
    }

    public function fish()
    {
        return $this->belongsTo('App\Models\Fish');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
