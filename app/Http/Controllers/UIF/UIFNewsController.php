<?php

namespace App\Http\Controllers\UIF;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Category_News;
use App\Models\News;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UIFNewsController extends Controller
{
    public function index(){

        $news =News::orderByDesc('created_at')->get();
        $news_categories=Category_News::with('category')->get();
        $categories = Category::all();

        return view('uif.news',compact('news','news_categories','categories'));
    }
    public function detail($slug){
        $news = News::where('slug',$slug)->firstOrFail();
        $category_search = $news->category()->pluck('category_id')->first();
        $category = Category::find($category_search);
        $categories = Category::all();
        $popular_news =News::orderByDesc('created_at')->take(3)->get();

        return view('uif.news_detail',compact('news','categories','category','popular_news'));
    }

        public function category_news($category_slug){
        $news = DB::table('category_news')
            ->join('news', 'news.id', 'category_news.id')
            ->join('category', 'category.id', 'category_news.category_id')
            ->select('news.*', 'category.category_name','category.slug as cate_slug')
            ->where('category.slug',$category_slug)
            ->orderBy('news.created_at','DESC')
            ->get();
            $categories = Category::all();

        return view('uif.category',compact('news','categories'));
    }
}
