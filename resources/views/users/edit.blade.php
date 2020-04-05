@extends('layouts.app')
@section('title','主页')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h4 class="page-title">User info</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">{{ $user->name }} 的主页</h4>
                    <form method="POST" action="{{ route('users.update',$user) }}" class="needs-validation" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group position-relative mb-3">
                            <label>用户名</label>
                            <input type="text" class="form-control" name="name"  value="{{ old('name',$user->name) }}" readonly>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label>邮箱</label>
                            <input type="text" class="form-control"  name="email" value="{{ old('email',$user->email) }}">
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label>手机号码</label>
                            <input type="text" class="form-control" name="phone"  value="{{ old('phone',$user->phone) }}">
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label>地址</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address',$user->address) }}">
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label>头像</label>
                            <input type="file" name="avatar"  class="form-control-file">
                            @if($user->avatar)
                                <br>
                                <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
                            @endif
                        </div>
                        @can('own',$user)
                            <button class="btn btn-primary" type="submit">保存</button>
                        @endcan

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
@endsection
