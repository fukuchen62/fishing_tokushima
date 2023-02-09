<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $guarded = array('id');

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

    // スコープ
    // カテゴリーID



    /**
     * knowlegeType
     *指定メンバーに属する1つの記事を取得する
     
     * @return void
     */
    public function knowledgeType()
    {
        return $this->hasOne('App\Models\KnowledgeTypes');
    }
    /**
     * KnowlegeTypes
     *指定メンバーに属するすべて（複数）の記事を取得する
     
     * @return void
     */
    public function knowledgeTypes()
    {
        return $this->hasMany('App\Models\KnowledgeTypes');
    }
}
