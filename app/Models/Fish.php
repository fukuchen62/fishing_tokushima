<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;


    // スコープ
    // 季節、難易度

    public function getData()
    {
        // $ret = $this->id . ':' . $this->name;
        // return $ret;
    }

    public function scopeFish($query, $month)
    {
        return $query->where('month', 'LIKE', "%$month%");
    }
}