<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    protected  $guarded =[];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function category()
    {
        return $this->belongsToMany('App\Models\Category','category_news');
    }
}
