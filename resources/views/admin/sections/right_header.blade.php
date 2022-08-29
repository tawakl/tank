
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
{{--            @include('partials.langSwitch')--}}
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
{{--                @if( auth()->user()->image)--}}
                <img src="" class="img-circle elevation-1" style="width: 1.9rem">
{{--                  {{ auth()->user()->name }}--}}
{{--                @else--}}
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-1" alt="User Image" style="width: 1.9rem">

{{--                @endif--}}
                <span class=" fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fa fa-user-circle"></i> {{trans('app.My Profile')}}
                </a>
                <div class="dropdown-divider"></div>
                <a href="/profile/logout" class="dropdown-item">
                    <i class="fa fa-sign-out-alt "></i> {{trans('app.logout')}}
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
