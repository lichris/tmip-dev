<!-- BEGIN NAVBAR -->
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="btn btn-transparent btn-equal btn-menu" href="javascript:void(0);"><i class="fa fa-bars fa-lg"></i></a>
        <div class="navbar-brand">
            <a class="main-brand" href="../../html/dashboards/dashboard.html">
                <h3 class="text-light text-white"><span>Boost<strong>Box</strong> </span><i class="fa fa-rocket fa-fw"></i></h3>
            </a>
        </div><!--end .navbar-brand -->
        <a class="btn btn-transparent btn-equal navbar-toggle" data-toggle="collapse" data-target="#header-navbar-collapse"><i class="fa fa-wrench fa-lg"></i></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="header-navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::route('trinity.index') }}"><i class="fa fa-home fa-lg"></i></a></li>
        </ul><!--end .nav -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lg fa-envelope"></i><sup class="badge badge-support2">2</sup></a>
                <ul class="dropdown-menu animation-zoom">
                    <li class="dropdown-header">Today's messages</li>
                    <li>
                        <a class="alert alert-warning" href="javascript:void(0);">
                            <img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar2.jpg?1401481650" alt="">
                            <strong>Alex Anistor</strong><br>
                            <small>Testing functionality...</small>
                        </a>
                    </li>
                    <li>
                        <a class="alert alert-info" href="javascript:void(0);">
                            <img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1401481654" alt="">
                            <strong>Alicia Adell</strong><br>
                            <small>Reviewing last changes...</small>
                        </a>
                    </li>
                    <li class="dropdown-header">Options</li>
                    <li><a href="../../html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                    <li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                </ul><!--end .dropdown-menu -->
            </li><!--end .dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lg fa-dashboard"></i></a>
                <ul class="dropdown-menu animation-dock">
                    <li class="dropdown-header">Server load</li>
                    <li class="dropdown-progress">
                        <a href="javascript:void(0);">
                            <div class="dropdown-label">
                                <span class="text-light">Server load <strong>Today</strong></span>
                                <strong class="pull-right">93%</strong>
                            </div>
                            <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
                        </a>
                    </li><!--end .dropdown-progress -->
                    <li class="dropdown-progress">
                        <a href="javascript:void(0);">
                            <div class="dropdown-label">
                                <span class="text-light">Server load <strong>Yesterday</strong></span>
                                <strong class="pull-right">30%</strong>
                            </div>
                            <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
                        </a>
                    </li><!--end .dropdown-progress -->
                    <li class="dropdown-progress">
                        <a href="javascript:void(0);">
                            <div class="dropdown-label">
                                <span class="text-light">Server load <strong>Lastweek</strong></span>
                                <strong class="pull-right">74%</strong>
                            </div>
                            <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
                        </a>
                    </li><!--end .dropdown-progress -->
                </ul><!--end .dropdown-menu -->
            </li><!--end .dropdown -->
            <li><span class="navbar-devider"></span></li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="navbar-profile dropdown-toggle text-bold" data-toggle="dropdown">{{ $user->user_name_kor }}
                    <i class="fa fa-fw fa-angle-down"></i>
                    <img class="img-circle" src="/profile/small/{{ $user->id }}" alt="">
                </a>
                <ul class="dropdown-menu animation-slide">
                    <li>{{ HTML::linkRoute('trinity.'.$namedRoutePrefix.'.profile', $user->user_name_kor.'님의 개인 공간') }}</li>
                    <li><a href="../../html/pages/calendar.html">My appointments</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::route('trinity.logout.post') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                </ul><!--end .dropdown-menu -->
            </li><!--end .dropdown -->
        </ul><!--end .nav -->
    </div><!--end #header-navbar-collapse -->
</nav>
<!-- END NAVBAR -->