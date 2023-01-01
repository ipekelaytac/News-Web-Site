<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ManagementNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['save','delete']]);
    }
    public function index()
    {
        if (request()->filled('search')) {
            request()->flash();
            $search = request('search');
            $list = News::where('title', 'like', "%$search%")
                ->orwhere('content', 'like', "%$search%")
                ->orWhere('id', $search)
                ->orderByDesc('id')
                ->get();
        } else {
            $list = News::orderByDesc('id')->get();
            $blog_sort_by = request('sırala');
            if ($blog_sort_by == 'yeni') {
                $list = News::orderByDesc('created_at')->get();

            } else if ($blog_sort_by == 'eski') {
                $list = News::orderBy('created_at', 'asc')->get();
            } else {
                $list = News::orderByDesc('id')->get();
            }
        }


        return view('management.news.news', compact('list'));
    }

    public function form($id = 0)
    {
        $entry = new News;
        $news_category = [];
        if ($id > 0) {
            $entry = News::find($id);
            $news_category = $entry->category()->pluck('category_id')->all();
        }


        $categories = Category::all();


        return view('management.news.form', compact('entry', 'categories', 'news_category'));
    }


    public function save($id = 0)
    {


        $data = request()->only('title', 'content', 'image',);

        $data['slug'] = Str::slug(request('title'), '-');
        request()->merge(['slug' => $data['slug']]);
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        $category = request('category');
        if ($id > 0) {
            $entry = News::where('id', $id)->firstOrFail();
            $entry->update($data);
            $entry->category()->sync($category);


        } else {
            $entry = News::create($data);
            $entry->category()->attach($category);
        }


        if (request()->hasFile('image')) {
            $this->validate(request(), [
                'image' => 'image|mimes:jpg,png,jpeg,gif,webp|max:2048'
            ]);
            $image = request()->file('image');
            $filename = $entry->id . "-" . time() . "." . $image->extension();
            if ($image->isValid()) {
                File::delete('uploads/news/' . $entry->image);
                $image->move('uploads/news', $filename);
                $entry->updateOrCreate(
                    ['id' => $entry->id],
                    ['image' => $filename]
                );

            }
        }
        return redirect()
            ->route('management.news.update',$entry->id)
            ->with('message', ($id > 0 ? 'Güncellendi' : 'Kaydedildi'))
            ->with('message_type', 'success');
    }


    public function delete($id)
    {
        $news = News::find($id);
        $news->category()->detach();
        File::delete('uploads/news/' . $news->image);
        $news->delete();

        return redirect()
            ->route('management.news')
            ->with('message', 'Kayıt silindi')
            ->with('message_type', 'success');
    }
}
