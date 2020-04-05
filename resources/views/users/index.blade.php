@extends('layouts.app')
@section('title','主页')
@section('content')

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-8">
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-right">
                            <button type="button" class="btn btn-danger mb-2 mr-2"><i class="mdi mdi-basket mr-1"></i> Add New User</button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-centered mb-0">
                        <thead>
                        <tr>
                            <th>用户</th>
                            <th>邮箱</th>
                            <th>电话</th>
                            <th>地址</th>
                            <th>IP</th>
                            <th>在职</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="table-user">
                                    <img src="{{ $user->avatar }}" alt="table-user" class="mr-2 rounded-circle">
                                    {{ $user->name }}
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->ip }}</td>
                                <td>
                                    @if($user->working)
                                        <div>
                                            <input type="checkbox" id="switch2" checked="" data-switch="success">
                                            <label for="switch2" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    @else
                                        <div>
                                            <input type="checkbox" id="switch3" data-switch="success">
                                            <label for="switch3" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    @endif
                                </td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{ $users->links() }}
    </div>


@endsection
