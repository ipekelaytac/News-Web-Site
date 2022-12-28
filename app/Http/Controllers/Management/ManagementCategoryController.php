<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManagementCategoryController extends Controller
{
    public function index(){
        $list = Category::orderByDesc('id')->get();

        return view('management.category.category',compact('list'));
    }

    public function form($id = 0)
    {

        $entry = new Category;
        if ($id > 0) {
            $entry = Category::find($id);
        }
        return view('management.category.form',compact('entry') );
    }

    public function save($id = 0)
    {
        $data = request()->only('category_name');


        if (!request()->filled('slug')) {
            $data['slug'] = Str::slug(request('category_name'), '-');
            request()->merge(['slug' => $data['slug']]);
        }
        $this->validate(request(), [
            'category_name' => 'required',
        ]);

        if ($id > 0) {
            $entry = Category::where('id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = Category::create($data);
        }

        return redirect()
            ->route('management.category.update', $entry->id)
            ->with('message', ($id > 0 ? 'Güncellendi' : 'Kaydedildi'))
            ->with('message_type', 'success');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category_news_number = $category->news()->count();
        if ($category_news_number > 0) {
            return redirect()
                ->route('management.category')
                ->with('message', "Bu kategoride $category_news_number adet blog var. Bu yüzden silme işlemi yapılmamıştır.")
                ->with('message_type', 'warning');
        }

        $category->delete();

        return redirect()
            ->route('management.category')
            ->with('message', 'Kayıt silindi')
            ->with('message_type', 'success');
    }


}
