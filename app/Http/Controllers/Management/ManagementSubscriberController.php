<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManagementSubscriberController extends Controller
{
    public function index(){
        $list = Subscriber::orderByDesc('id')->get();
        return view('management.subscriber.subscriber',compact('list'));
    }


    public function delete($id)
    {
        $subscriber = Subscriber::find($id);


        $subscriber->delete();

        return redirect()
            ->route('management.subscriber')
            ->with('message', 'Kayıt silindi')
            ->with('message_type', 'success');
    }
}
