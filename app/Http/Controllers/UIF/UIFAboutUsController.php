<?php

namespace App\Http\Controllers\UIF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UIFAboutUsController extends Controller
{
    public function index(){
        return view('uif.about_us');
    }
}
