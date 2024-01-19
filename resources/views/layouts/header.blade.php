 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">School Management</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown navbar-inverse">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{Auth::user()->name}} <b class="caret"></b>
            </a>

            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->
</nav>

<aside class="sidebar navbar-default" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            @if(Auth::user()->user_type == 1)
            {{-- admin == 1 --}}
                <li class="sidebar-name">
                    <div class="name_inner">
                        <h5 class="text-uppercase">{{Auth::user()->name}}</h5>
                    </div>
                </li>
                <li>
                    <a href="{{url('admin/dashboard')}}" class="@if(Request::segment(2) == 'dashboard') active @endif"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'admin') active @endif" href="{{url('admin/admin/list')}}"><i class="fa fa-user fa-fw"></i> Admin</a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'class') active @endif" href="{{url('admin/class/list')}}"><i class="fa fa-user fa-fw"></i> Class</a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'subject') active @endif" href="{{url('admin/subject/list')}}"><i class="fa fa-user fa-fw"></i> Subject</a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'assign_subject') active @endif" href="{{url('admin/assign_subject/list')}}"><i class="fa fa-user fa-fw"></i>Assign Subject</a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'change_password') active @endif" href="{{url('admin/change_password')}}"><i class="fa fa-user fa-fw"></i>Change Password</a>
                </li>
            @elseif(Auth::user()->user_type == 2)
            {{-- teacher == 2 --}}
                <li class="sidebar-name">
                    <div class="name_inner">
                        <h5 class="text-uppercase">{{Auth::user()->name}}</h5>
                    </div>
                </li>
                <li>
                    <a href="{{url('teacher/dashboard')}}" class="@if(Request::segment(2) == 'dashboard') active @endif"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'change_password') active @endif" href="{{url('teacher/change_password')}}"><i class="fa fa-user fa-fw"></i>Change Password</a>
                </li>

            @elseif(Auth::user()->user_type == 3)
            {{-- student == 3 --}}
                <li class="sidebar-name">
                    <div class="name_inner">
                        <h5 class="text-uppercase">{{Auth::user()->name}}</h5>
                    </div>
                </li>
                <li>
                    <a href="{{url('student/dashboard')}}" class="@if(Request::segment(2) == 'dashboard') active @endif"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'change_password') active @endif" href="{{url('student/change_password')}}"><i class="fa fa-user fa-fw"></i>Change Password</a>
                </li>

            @elseif(Auth::user()->user_type == 4)
                <li class="sidebar-name">
                    <div class="name_inner">
                        <h5 class="text-uppercase">{{Auth::user()->name}}</h5>
                    </div>
                </li>
                <li>
                    <a href="{{url('parent/dashboard')}}" class="@if(Request::segment(2) == 'dashboard') active @endif"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'change_password') active @endif" href="{{url('parent/change_password')}}"><i class="fa fa-user fa-fw"></i>Change Password</a>
                </li>

            @endif
                <li>
                    <a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>


        </ul>
    </div>
</aside>
<!-- /.sidebar -->
