<?php

namespace App\Http\Controllers\UIF;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Mail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UIFContactController extends Controller
{
    public function index(){

        if(\request()->isMethod('post')) {
            $data = request()->only('name_surname', 'email', 'subject', 'content');
            $this->validate(request(), [
                'name_surname' => 'required|max:55',
                'email' => 'required|email|max:70',
                'subject' => 'required|max:70',
                'content' => 'required',
            ]);
            Mail::create($data);
            return redirect()
                ->route('uif.contact')
                ->with('message', 'Gönderildi.')
                ->with('message_type', 'success');
        }
        if(\request()->isMethod('get')) {
            return view('uif.contact');
    }
    }
    public function subscriber(){

        if(\request()->isMethod('post')) {
            $data = request()->only( 'email');
            $this->validate(request(), [
                'email' => 'required|email|max:150|unique:subscriber',
            ]);
            Subscriber::create($data);
            return redirect()
                ->route('uif.index')
                ->with('message', 'Gönderildi.')
                ->with('message_type', 'success');
        }

    }

}
