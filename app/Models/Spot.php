<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    public static $rules = array(
        'name' => 'required',
        'title' => 'required',
        'overview' => 'required',
        'content' => 'required'
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