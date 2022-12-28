<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\News;
use App\Models\Subscriber;
use App\Models\Team;
use App\Models\User;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagementIndexController extends Controller
{
    public function index()
    {
        $user_count = User::count();
        $news_count = News::count();
        $category_count = Category::count();
        $subscriber_count = Subscriber::count();
        $all_news = News::orderByDesc('id')->take(5)->get();
        return view('management.index',compact('news_count','user_count','category_count','subscriber_count','all_news'));
    }



}
