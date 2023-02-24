<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPoint extends Model
{
    use HasFactory;
    protected $table="news_point";
    protected  $guarded =[];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public function user()
    {
        return $this->belongsToMany('App\Models\User','user_id');
    }

    public function news()
    {
        return $this->belongsTo('App\Models\News','news_id');
    }
}
