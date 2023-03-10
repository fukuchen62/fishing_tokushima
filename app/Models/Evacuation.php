<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evacuation extends Model
{
    use HasFactory;

    /**
     * getData
     *
     * @return void
     */
    // public function getData()
    // {
    //     $ret = $this->id . ':' . $this->city_id;
    //     return $ret;
    // }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
