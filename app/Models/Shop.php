<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|string|max:60',
        'city_id' => 'required|integer',
        'postal_code' => 'max:8',
        'address' => 'required|string|max:200',
        'iframe' => 'max:500',
        'longitude' => 'max:20',
        'latitude' => 'max:20',
        'tel' => 'required|string|max:20',
        'fax' => 'max:20',
        'email' => 'max:100',
        'url' => 'max:200',
        'service_day' => 'required|string|max:500',
        'service' => 'required|string|max:500',
        'pr' => 'max:500',
        'img' => 'max:200',
        'memo' => 'max:200',
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
