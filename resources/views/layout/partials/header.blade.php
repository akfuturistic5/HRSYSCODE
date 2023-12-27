<!-- Header -->
<div class="header">

    <!-- Logo -->
    <div class="header-left">
        <a href="{{ url('admin-dashboard') }}" class="logo">
            <img src="{{ URL::asset('assets/img/logo.png') }}" width="40" height="40" alt="">
        </a>
        <a href="{{ url('admin-dashboard') }}" class="logo2">
            <img src="{{ URL::asset('assets/img/logo2.png') }}" width="40" height="40" alt="">
        </a>
    </div>
    <!-- /Logo -->
    @if (!Route::is(['compose', 'inbox', 'job-list', 'job-view', 'tasks']))
        <a id="toggle_btn" href="javascript:void(0);">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
    @endif

    <!-- Header Title -->
    @if (!Route::is(['job-view']))
        <div class="page-title-box">
            <h3>Dreamguy's Technologies</h3>
        </div>
    @endif
    @if (Route::is(['job-view']))
        <div class="page-title-box float-start">
            <h3>Dreamguy's Technologies</h3>
        </div>
    @endif
    <!-- /Header Title -->
    @if (!Route::is(['job-view']))
        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
    @endif
    <!-- Header Menu -->
    <ul class="nav user-menu">

        <!-- Search -->
        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
                <form action="search">
                    @if (!Route::is(['job-view']))
                        <input class="form-control" type="text" placeholder="Search here">
                    @endif
                    @if (Route::is(['job-view']))
                        <input class="form-control job-view-search" type="text" placeholder="Search here">
                    @endif
                    <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </li>
        <!-- /Search -->

        @if (!Route::is(['job-list', 'job-view']))
            <li class="nav-item dropdown has-arrow flag-nav">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                    <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="Flag" height="20"> <span>English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="Flag" height="16"> English
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/fr.png')}}" alt="Flag" height="16"> French
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/es.png')}}" alt="Flag" height="16"> Spanish
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/de.png')}}" alt="Flag" height="16"> German
                    </a>
                </div>
            </li>
        @endif
        @if (Route::is(['job-list', 'job-view']))
            <!-- Flag -->
            <li class="nav-item dropdown has-arrow flag-nav">
                <a class="nav-link dropdown-toggle job-view-flag" data-bs-toggle="dropdown" href="#"
                    role="button">
                    <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="Flag" height="20"> <span>English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="Flag" height="16"> English
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/fr.png')}}" alt="Flag" height="16"> French
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/es.png')}}" alt="Flag" height="16"> Spanish
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/de.png')}}" alt="Flag" height="16"> German
                    </a>
                </div>
            </li>
            <!-- /Flag -->
        @endif

        <!-- Notifications -->
        @if (!Route::is(['job-list', 'job-view']))
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <i class="fa-regular fa-bell"></i> <span class="badge rounded-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="{{ url('activities') }}">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">John Doe</span> added new
                                                task <span class="noti-title">Patient appointment booking</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('activities') }}">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-03.jpg') }}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                changed the task name <span class="noti-title">Appointment booking with
                                                    payment gateway</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('activities') }}">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-06.jpg') }}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Misty Tison</span> added
                                                <span class="noti-title">Domenic Houston</span> and <span
                                                    class="noti-title">Claire Mapes</span> to project <span
                                                    class="noti-title">Doctor available module</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('activities') }}">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-17.jpg') }}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                completed task <span class="noti-title">Patient and Doctor video
                                                    conferencing</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('activities') }}">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                added new task <span class="noti-title">Private chat module</span></p>
                                            <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="{{ url('activities') }}">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->
        @endif

        @if (!Route::is(['job-list', 'job-view']))
            <!-- Message Notifications -->
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <i class="fa-regular fa-comment"></i> <span class="badge rounded-pill">8</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Messages</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="{{ url('chat') }}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt=""
                                                    src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('chat') }}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt=""
                                                    src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">6 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('chat') }}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt=""
                                                    src="{{ URL::asset('assets/img/profiles/avatar-03.jpg') }}">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">5 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('chat') }}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt=""
                                                    src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">3 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{ url('chat') }}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img src="{{ URL::asset('assets/img/profiles/avatar-08.jpg') }}"
                                                    alt="">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">27 Feb</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="{{ url('chat') }}">View all Messages</a>
                    </div>
                </div>
            </li>
            <!-- /Message Notifications -->
        @endif
        @if (!Route::is(['job-list', 'job-view']))
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img"><img src="{{ URL::asset('assets/img/profiles/avatar-21.jpg') }}"
                            alt="">
                        <span class="status online"></span></span>
                    <span>Admin</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>
                    <a class="dropdown-item" href="{{ url('settings') }}">Settings</a>
                    <a class="dropdown-item" href="{{ url('index') }}">Logout</a>
                </div>
        @endif
        @if (Route::is(['job-list', 'job-view']))
            <li class="nav-item">
                <a class="nav-link" href="{{ url('index') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('register') }}">Register</a>
            </li>
        @endif
        </li>
    </ul>
    <!-- /Header Menu -->
    @if (!Route::is(['job-list', 'job-view']))
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ url('settings') }}">Settings</a>
                <a class="dropdown-item" href="{{ url('index') }}">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->
    @endif
    @if (Route::is(['job-list', 'job-view']))
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ url('index') }}">Login</a>
                <a class="dropdown-item" href="{{ url('register') }}">Register</a>
            </div>
        </div>
        <!-- /Mobile Menu -->
    @endif

</div>
<!-- /Header -->
