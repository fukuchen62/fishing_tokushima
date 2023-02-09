<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'title' => 'required'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . ': ' . $this->title . ': ' . $this->overview . ': ' . $this->content;
    }
}
