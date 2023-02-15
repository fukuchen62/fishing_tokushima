<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    public static $rules = array(

    );
    // スコープ
    // 季節、難易度

    public function getData()
    {
        $ret = $this->spots->name;
        return $ret;
    }

    public function scopeFish($query, $month)
    {
        return $query->where('month', 'LIKE', "%$month%");
    }

    public function scopeFish2($query, $level)
    {
        return $query->where('level', 4);
    }

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
}
