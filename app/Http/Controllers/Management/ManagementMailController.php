<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use Illuminate\Http\Request;

class ManagementMailController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['delete']]);
    }
    public function index(){

        if (request()->filled('search')) {
            request()->flash();
            $search = request('search');
            $list = Mail::where('email', 'like', "%$search%")
                ->orwhere('content', 'like', "%$search%")
                ->orwhere('name_surname', 'like', "%$search%")
                ->orwhere('subject', 'like', "%$search%")
                ->orWhere('id', $search)
                ->orderByDesc('id')
                ->get();

        } else {
            $list = Mail::orderByDesc('id')->get();

        }
        return view('management.mail.mail',compact('list'));
    }


    public function delete($id)
    {
        $subscriber = Mail::find($id);


        $subscriber->delete();

        return redirect()
            ->route('management.mail')
            ->with('message', 'Kayıt silindi')
            ->with('message_type', 'success');
    }
}
