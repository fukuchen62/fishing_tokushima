<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

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
}
