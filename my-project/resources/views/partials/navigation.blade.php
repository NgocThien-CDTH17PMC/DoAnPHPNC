<!-- Navigation Bar-->
<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            @if(Auth::check())
                                {{ Auth::user()->ho_ten }}
                            @endif
                            <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                @if(Auth::check())
                                    {{ Auth::user()->ho_ten }}
                                @endif
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{ route('dang-xuat') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="28">
                    </span>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu -->
                <ul class="navigation-menu">
                    <!-- Trang Chủ -->
                    <li>
                        <a href="{{route('master')}}">
                            <i class="la la-home"></i>Trang Chủ
                        </a>
                    </li>

                    <!-- Lĩnh Vực -->
                    <li>
                        <a href="{{route('linh-vuc.ds-linh-vuc')}}">
                            <i class="la la-cube"></i>Quản Lý Lĩnh Vực
                        </a>
                    </li>

                    <!-- Câu Hỏi -->
                    <li>
                        <a href="{{route('cau-hoi.ds-cau-hoi')}}">
                            <i class="la la-question"></i>Quản Lý Câu Hỏi
                        </a>
                    </li>

                    <!-- Gói Credit -->
                    <li>
                        <a href="{{route('goi-credit.ds-goi-credit')}}">
                            <i class="la la-money"></i>Quản Lý Gói Credit
                        </a>
                    </li>

                    <!-- Lượt Chơi -->
                    <li>
                        <a href="{{route('luot-choi.ds-luot-choi')}}">
                            <i class="la la-diamond"></i>Quản Lý Lượt Chơi
                        </a>
                    </li>

                    <!-- Người Chơi -->
                    <li>
                        <a href="{{route('nguoi-choi.ds-nguoi-choi')}}">
                            <i class="la la-child"></i>Quản Lý Người Chơi
                        </a>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>