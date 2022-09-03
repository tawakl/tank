<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">CE ALI</span>
    </a>

{{--    <!-- Sidebar -->--}}
{{--    <div class="sidebar">--}}
{{--        <!-- Sidebar user panel (optional) -->--}}
{{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--            <div class="image">--}}
{{--                @if( auth()->user()->image)--}}
{{--                <img src="{{asset('storage/'.  auth()->user()->image )}}"--}}
{{--                     style="width:70px; height:40px" class="img-circle elevation-2" alt="User Image">--}}
{{--                @else--}}
{{--                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">--}}

{{--                @endif--}}
{{--                <span class="ml-4 text-bold" style="color: white">{{ auth()->user()->name }}</span>--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <a href="#" class="d-block">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('home') }}" class="nav-link ">
                        <i class="fas fa-home p-2"></i>
                        <p>
                            {{trans('navigation.home')}}
                        </p>
                    </a>
                </li>
                @if(auth()->user()->isAdmin())
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('users') }}" class="nav-link ">
                        <i class="fas fa-users p-2"></i>
                        <p>
                            {{trans('navigation.users')}}
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('categories') }}" class="nav-link ">
                        <i class="fas fa-list p-2"></i>
                        <p>
                            {{trans('navigation.categories')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('services') }}" class="nav-link ">
                        <i class="fas fa-list p-2"></i>
                        <p>
                            services
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('posts') }}" class="nav-link ">
                        <i class="fa fa-address-book p-2"></i>
                        <p>
                            posts
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('tags') }}" class="nav-link ">
                        <i class="fa fa-address-book p-2"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('profile.get.edit') }}" class="nav-link ">
                        <i class="fa fa-address-book p-2"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('contacts.index') }}" class="nav-link ">
                        <i class="fa fa-address-book p-2"></i>
                        <p>
                            Contacts
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('testimonials') }}" class="nav-link ">
                        <i class="fa fa-address-book p-2"></i>
                        <p>
                            Testimonials
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
</aside>
