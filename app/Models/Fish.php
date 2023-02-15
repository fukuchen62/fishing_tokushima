<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array();
    // スコープ
    // 季節、難易度

    public function getData()
    {
        // $ret = $this->spots->name;
        // return $ret;
    }


    // 選択した月が含まれているデータを検索
    public function scopeFish($query, $month)
    {
        return $query->where('month', 'LIKE', "%$month%");
    }
    // levelが4以外のデータを検索
    public function scopeFish2($query, $level)
    {
        return $query->where('level', '<>', 4);
    }


    // monthのa,b,cを10,11,12に変更
    public function getMonth()
    {
        $ret = $this->month;
        if (strstr($ret, 'a')) {
            $ret = str_replace('a', '10', $ret);
        }
        if (strstr($ret, 'b')) {
            $ret = str_replace('b', '11', $ret);
        }
        if (strstr($ret, 'c')) {
            $ret = str_replace('c', '12', $ret);
        }
        return $ret;
    }


    // levelの1,2,3を画像に変更
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
}