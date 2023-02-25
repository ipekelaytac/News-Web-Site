<?php

namespace App\Http\Controllers\UIF;

use App\Http\Controllers\Controller;
use App\Models\NewsCollection;
use App\Models\NewsFavorite;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UIFFavoriteNewsController extends Controller
{
    public function favorite()
    {
        $favorite_news = NewsFavorite::
        where([['user_id' ,'=', auth()->id()],
            ['collection_id' ,'=', null],])
            ->orderByDesc('id')->get();
        $favorite_collections = NewsCollection::where('user_id' , auth()->id())
            ->orderByDesc('id')->get();

        return view('uif.favorite', compact('favorite_news','favorite_collections'));
    }

    public function add($id)
    {
        $news = News::find($id);
        $empty = NewsFavorite::where('user_id', auth()->id())
            ->where('news_id',$id)
            ->where('collection_id',NULL)
            ->count();
        if($empty==0){
            NewsFavorite::create([
                'user_id' => auth()->id(),
                'news_id'=>$id,
            ]);
        }
        else{
            return redirect()
                ->route('uif.news.detail', $news->slug)
                ->with('message', 'Bu ürün favorilerde var!')
                ->with('message_type', 'warning');
        }
        return redirect()
            ->route('uif.news.detail', $news->slug)
            ->with('message', 'Favorilere eklendi.')
            ->with('message_type', 'success');
    }
    public function delete($id)
    {
        $favorite_news = NewsFavorite::where('user_id',auth()->id())->where('news_id',$id)->first();
        $favorite_news->delete();
        return redirect()
            ->route('uif.favorite')
            ->with('message', 'Haber silindi')
            ->with('message_type', 'success');
    }

    public function collection()
    {
        $favorite_collection = NewsCollection::where('user_id' , auth()->id())
            ->orderByDesc('id')->get();


        return view('uif.collection', compact('favorite_collection'));
    }

    public function collection_detail($collection_slug)
    {
        $favorite_collection = NewsCollection::whereSlug($collection_slug)->firstOrFail();

        $collection_news = NewsFavorite::where([
            ['user_id' ,'=', auth()->id()],
            ['collection_id' ,'=', $favorite_collection->id],])
            ->orderByDesc('id')->get();
        $favorite_collections = NewsCollection::where('user_id' , auth()->id())
            ->orderByDesc('id')->get();

        return view('uif.collection_detail', compact('collection_news','favorite_collection','favorite_collections'));
    }

    public function collection_add()
    {
        $slug = Str::slug(request('collection_name'), '-');
        NewsCollection::create([
            'user_id' => auth()->id(),
            'collection_name'=>request('collection_name'),
            'slug'=>$slug,
        ]);

        return redirect()
            ->route('uif.collection')
            ->with('message', 'Koleksiyon eklendi.')
            ->with('message_type', 'success');
    }
    public function collection_delete($id)
    {
        $collection = NewsCollection::find($id);
        $collection_empty = NewsFavorite::where('collection_id',$id)->count();
        if($collection_empty > 0){
            return redirect()
                ->route('uif.collection')
                ->with('message', 'Koleksiyon boş değil.')
                ->with('message_type', 'warning');
        }else{
        $collection->delete();
        return redirect()
            ->route('uif.collection')
            ->with('message', 'Koleksiyon silindi')
            ->with('message_type', 'success');
        }
    }
    public function collection_news_delete($id)
    {
        $collection_news_delete = NewsFavorite::where('user_id',auth()->id())->where('news_id',$id)->first();
        $collection_news_delete->delete();

        return redirect()
            ->route('uif.collection')
            ->with('message', 'Koleksiyondan haber silindi')
            ->with('message_type', 'success');
    }
    public function collection_news_add()
    {
        $news = News::find(\request('news_id'));
        $empty = NewsFavorite::where('user_id', auth()->id())
            ->where('news_id',request('news_id'))
            ->where('collection_id',request('collection_id'))
            ->count();
        if($empty==0){
            NewsFavorite::create([
                'user_id' => auth()->id(),
                'news_id'=>request('news_id'),
                'collection_id'=>request('collection_id'),
            ]);
        }
        else{
            return redirect()
                ->route('uif.news.detail', $news->slug)
                ->with('message', 'Bu koleksiyonda haber var!')
                ->with('message_type', 'warning');
        }
        return redirect()
            ->route('uif.news.detail', $news->slug)
            ->with('message', 'Koleksiyona eklendi.')
            ->with('message_type', 'success');
    }
}
