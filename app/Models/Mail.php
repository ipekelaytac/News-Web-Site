<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    protected $table = "mail";
    protected  $guarded =[];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
