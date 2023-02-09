<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowlege extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    // public static $rules = array(
    //     'name' => 'required',
    //     'title' => 'email',
    //     'age' => 'integer|min:0|max:150',
    // );

    /**
     * getData
     *
     * @return void
     */
    public function getData()
    {
        $ret = $this->id . ':' . $this->title . ':' . $this->overview . ':' . $this->content;
        return $ret;
    }
}
