<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsFavorite extends Model
{
    use HasFactory;
    protected $table = "news_favorite";
    protected  $guarded =[];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function favorite_user()
    {
        return $this->belongsToMany('App\Models\User','user_id');
    }
    public function favorite_collection()
    {
        return $this->belongsToMany('App\Models\NewsCollection','collection_id');
    }
    public function news()
    {
        return $this->belongsTo('App\Models\News','news_id');
    }
}
