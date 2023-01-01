<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected  $guarded =[];
    public $timestamps = false;


    public function news()
    {
        return $this->belongsToMany('App\Models\News','category_news');
    }
}
