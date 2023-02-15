<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    public static $rules = array(
        'overview' => 'required',
        'img1' => 'required',
        'img2' => 'required',
        'img3' => 'required',
        'img4' => 'required',
        'img5' => 'required',
        'fish_id' => 'required',
        'mony' => 'required',
        'shop_id' => 'required',
        'plan_id' => 'required',
        'evacuation_id' => 'required',
        'parking_id' => 'required',
        'hospital_id' => 'required',
        'supermarket_id' => 'required',
        'restaurant_id' => 'required',
        'other_id' => 'required'
    );

    /**
     * getData
     *
     * @return void
     */
    public function getData()
    {
        $ret = $this->id . ':' . $this->name;
        return $ret;
    }

    public function scopeCity($query, $cityId)
    {
        return $query->where('city_id', $cityId);
    }
}
