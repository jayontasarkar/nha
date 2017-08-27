<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                জাতীয় গৃহায়ন কর্তৃপক্ষ
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        @if(($counter = $unreadNotifications->count()) > 0)
                            <span class="label-count">{{ $counter }}</span>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                @if($counter > 0)
                                    @foreach($unreadNotifications->take(5) as $notify)
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="menu-info">
                                                    <h4>{{ str_limit(json_decode($notify->data)->message, 60) }}</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> {{ \Carbon\Carbon::parse($notify->created_at)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="menu-info">
                                                <h4>no new notifications was found.</h4>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="{{ route('notifications.index') }}">View All Notifications</a>
                        </li>
                    </ul>
                </li>

                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>