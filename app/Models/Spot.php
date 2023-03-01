<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|string|max:60',
        'overview' => 'max:200',
        'sity_id' => 'integer',
        'postal_code' => 'max:8',
        'spot_address' => 'required|string|max:200',
        'iframe_url' => 'max:200',
        'spot_longitude' => 'max:20',
        'spot_latitude' => 'max:20',
        'toilet' => 'required|string|max:10',
        'toilet_longitude' => 'max:20',
        'toilet_latitude' => 'max:20',
        'img1' => 'max:200',
        'img2' => 'max:200',
        'img3' => 'max:200',
        'img4' => 'max:200',
        'img5' => 'max:200',
        'fish_id' => 'required|string|max:50',
        'mony' => 'max:20',
        'bbq' => 'max:10',
        'shop_id' => 'required|string|max:20',
        'plan_id' => 'required|string|max:20',
        'evacuation_id' => 'required|string|max:20',
        'parking_id' => 'required|integer',
        'hospital_id' => 'required|integer',
        'supermarket_id' => 'required|integer',
        'restaurant_id' => 'required|integer',
        'other_id' => 'required|integer',
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

    public function fish()
    {
        return $this->belongsTo('App\Models\Fish');
    }
    public function hospital()
    {
        return $this->belongsTo('App\Models\Facility');
    }
}
