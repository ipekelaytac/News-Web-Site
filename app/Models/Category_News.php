<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_News extends Model
{
    use HasFactory;
    protected $table="category_news";
    protected  $guarded =[];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function news()
    {
        return $this->belongsTo('App\Models\News');
    }
}
