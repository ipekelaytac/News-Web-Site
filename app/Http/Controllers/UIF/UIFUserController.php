<?php

namespace App\Http\Controllers\UIF;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UIFUserController extends Controller
{
    public function index()
    {
        return view('/uif/login');
    }
    public function login()
    {
        $this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $credentials=[
            'email'=>request('email'),
            'password'=>request('password'),
            'isit_active'    => 1
        ];
        if (Auth()->attempt($credentials)) {
            return redirect()->route('uif.index');
        }
        else{
            $errors =[
                'email'=>'Hatalı giriş',
            ];
            return back()->withErrors($errors);


        }
    }

    public function register()
    {
        $this->validate(request(),[
            'email'=>'required|email|unique:user',
            'password' => 'required|confirmed|min:6|max:20',

        ]);
        $user = User::create([
            'email'=>request('email'),
            'password'=>Hash::make(request('password')),
            'isit_active'=>1
        ]);
        auth()->login($user);
        return redirect()->route('uif.index');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('uif.user');
    }
}
