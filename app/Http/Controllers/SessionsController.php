<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(SessionRequest $request)
    {
        if(\Auth::attempt($request->only(['name','password']),$request->has('remember_me'))){
            session()->flash('success', '欢迎回来！');
            return redirect()->route('home');
        }else{
            session()->flash('danger','您的邮箱和密码不匹配！！请重新登入');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        \Auth::logout();
        session()->flash('danger', '您已成功退出！!');
        return redirect('login');
    }
}
