<div class="container-fluid">

    <a href="{{ route('home') }}" class="topnav-logo">
        <span class="topnav-logo-lg">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="16">
        </span>
        <span class="topnav-logo-sm">
            <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="16">
        </span>
    </a>

    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="dripicons-bell noti-icon"></i>
                <span class="noti-icon-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">

                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
<span class="float-right">
<a href="javascript: void(0);" class="text-dark">
<small>Clear All</small>
</a>
</span>Notification
                    </h5>
                </div>
                <div class="slimscroll" style="max-height: 230px;">
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">1 min ago</small>
                        </p>
                    </a>
                </div>

                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    View All
                </a>
            </div>
        </li>
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="{{ asset(Auth::user()->avatar)}}" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">{{ Auth::user()->name }}</span>
                    <span class="account-position">风筝有风，海豚有海</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">

                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <a href="{{ route('users.edit',Auth::user()) }}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span>账号</span>
                </a>

                <a href="#" class="dropdown-item notify-item">
                    <form action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <i class="mdi mdi-logout mr-1"></i>
                        <button class="btn btn-link" type="submit">退出</button>
                    </form>
                </a>
            </div>
        </li>
    </ul>



    <div class="app-search">
        <form>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="mdi mdi-magnify"></span>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

</div>
