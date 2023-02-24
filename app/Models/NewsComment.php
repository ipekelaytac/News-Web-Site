<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    use HasFactory;
    protected $table="news_comment";
    protected  $guarded =[];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public function user()
    {
        return $this->belongsToMany('App\Models\User','user');
    }

    public function news()
    {
        return $this->belongsTo('App\Models\News','news_id');
    }
}
