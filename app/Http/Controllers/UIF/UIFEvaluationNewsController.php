<?php

namespace App\Http\Controllers\UIF;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Http\Request;

class UIFEvaluationNewsController extends Controller
{
    public function comment(){
        $data = request()->only('comment', 'news_id');
             NewsComment::create([
                'comment'=>$data['comment'],
                 'user_id'=>auth()->id(),
                 'news_id'=>$data['news_id']
            ]);
             $news= News::find($data['news_id']);
        return redirect()
            ->route('uif.news.detail',$news->slug)
            ->with('message', 'Yorum Yapıldı.')
            ->with('message_type', 'success');
    }

    public function comment_delete($id){
        $comment = NewsComment::find($id);
        $news = News::find($comment->news_id);
        $comment->delete();
        return redirect()
            ->route('uif.news.detail',$news->slug)
            ->with('message', 'Yorum Silindi.')
            ->with('message_type', 'success');
    }
}
