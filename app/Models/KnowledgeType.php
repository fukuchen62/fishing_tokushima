<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeType extends Model
{
    use HasFactory;

    public function getData()
    {
        $ret = $this->id . ':' . $this->name;
        return $ret;
    }
}
