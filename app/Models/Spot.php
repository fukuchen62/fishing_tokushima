<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'overview' => 'required|string|max:200',
        'img1' => 'required|string|max:200',
        'img2' => 'string|max:200',
        'img3' => 'string|max:200',
        'img4' => 'string|max:200',
        'img5' => 'string|max:200',
        'fish_id' => 'string|max:20',
        'mony' => 'string|max:20',
        'shop_id' => 'string|max:20',
        'plan_id' => 'string|max:20',
        'evacuation_id' => 'string|max:20',
        'parking_id' => 'integer',
        'hospital_id' => 'integer',
        'supermarket_id' => 'integer',
        'restaurant_id' => 'integer',
        'other_id' => 'integer',
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
