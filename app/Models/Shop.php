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
        'city_id' => 'integer',
        'postal_code' => 'string|max:8',
        'address' => 'string|max:200',
        'iframe' => 'string|max:200',
        'longitude' => 'string|max:20',
        'latitude' => 'string|max:20',
        'tel' => 'string|max:20',
        'fax' => 'string|max:20',
        'email' => 'string|max:100',
        'url' => 'string|max:200',
        'service_day' => 'string|max:100',
        'service' => 'string|max:200',
        'pr' => 'string|max:200',
        'img' => 'string|max:200',
        'memo' => 'string|max:200',
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
