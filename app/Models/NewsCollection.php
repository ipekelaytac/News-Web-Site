<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCollection extends Model
{
    use HasFactory;
    protected $table = "news_collection";
    protected  $guarded =[];
    public $timestamps = false;
}
