<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required|string|max:20',
        'formal_name' => 'max:50',
        'detail' => 'required|string|max:500',
        'keep' => 'max:200',
        'cooking1' => 'required|string|max:50',
        'cooking2' => 'max:50',
        'cooking3' => 'max:50',
        'cooking_img1' => 'max:200',
        'cooking_img2' => 'max:200',
        'cooking_img3' => 'max:200',
        'method' => 'required|string|max:100',
        'month' => 'max:50',
        'level' => 'required|integer',
        'spot_id' => 'max:100',
        'fish_img1' => 'required|string|max:200',
        'fish_img2' => 'max:200',
        'fish_img3' => 'max:200',
        'plan_id' => 'max:20',
        'memo' => 'max:200',
        'is_show' => 'required|boolean',
    );
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

        $ret = str_replace('|', ',', $ret);

        return $ret;
    }


    // levelの1,2,3を画像に変更
    public function getLevel()
    {
        $ret = $this->level;
        if (strstr($ret, '1')) {
            $ret = str_replace(
                '1',
                '<div class="level1">
                    <img src="../assets/images/star.png" width="40" height="40" alt="☆">
                </div>',
                $ret
            );
        }
        if (strstr($ret, '2')) {
            $ret = str_replace(
                '2',
                '<div class="level2">
                    <img src="../assets/images/star.png" width="40" height="40" alt="☆">
                    <img src="../assets/images/star.png" width="40" height="40" alt="☆">
                </div>',
                $ret
            );
        }
        if (strstr($ret, '3')) {
            $ret = str_replace(
                '3',
                '<div class="level3">
                    <img src="../assets/images/star.png" width="40" height="40" alt="☆">
                    <img src="../assets/images/star.png" width="40" height="40" alt="☆">
                    <img src="../assets/images/star.png" width="40" height="40" alt="☆">
                </div>',
                $ret
            );
        }
        return $ret;
    }
}
