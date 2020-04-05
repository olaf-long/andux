<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(15);
        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'ip' => $request->ip(),
            'avatar' => '/uploads/avatar/default.jpg'
        ]);
        \Auth::guard('web')->login($user);
        session()->flash('success','欢迎回来~~~');
        return redirect()->route('home');
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request,User $user,ImageUploadHandler $uploadHandler)
    {
        $this->authorize('own',$user);
        $data = $request->all();
        if ($request->avatar) {
            $result = $uploadHandler->save($request->avatar, 'avatar', $user->id);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }
        $user->update($data);
        return redirect()->route('users.edit',$user)->with('success','修改个人资料成功！');
    }


}
