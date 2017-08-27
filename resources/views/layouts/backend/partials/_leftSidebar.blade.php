<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">

        </div>
        <div class="info-container" style="padding-top: 50px;">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
            <div class="email" style="padding-left: 42px;">
                {{ $loggedInAs->name }}
            </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        >
                            <i class="material-icons">input</i>Sign Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header"></li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">home</i>
                    <span>Admin Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::segment(1) == 'settings' ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">settings_applications</i>
                    <span>Software Settings</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) == 'users' ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <span>Login Settings</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Request::is('settings/users') ? 'active' : '' }}">
                                <a href="{{ route('settings.users.index') }}">All Login Users</a>
                            </li>
                            <li class="{{ Request::is('settings/users/create') ? 'active' : '' }}">
                                <a href="{{ route('settings.users.create') }}">New Login Users</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(2) == 'projects' ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <span>Project Settings</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Request::is('settings/projects') ? 'active' : '' }}">
                                <a href="{{ route('settings.projects.index') }}">List All Projects</a>
                            </li>
                            <li class="{{ Request::is('settings/projects/create') ? 'active' : '' }}">
                                <a href="{{ route('settings.projects.create') }}">Create New Project</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(2) == 'roles' ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <span>Permission Settings</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Request::is('settings/roles') ? 'active' : '' }}">
                                <a href="{{ route('settings.roles.index') }}">All Permissions</a>
                            </li>
                            <li class="{{ Request::is('settings/roles/create') ? 'active' : '' }}">
                                <a href="{{ route('settings.roles.create') }}">New Permission</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) == 'project-management' ? 'active' : '' }}">
                <a href="{{ route('projectmgt.index') }}">
                    <i class="material-icons">dashboard</i>
                    <span>Project Management</span>
                </a>
            </li>
            <li class="{{ Request::is('notifications') ? 'active' : '' }}">
                <a href="{{ route('notifications.index') }}">
                    <i class="material-icons">bookmark</i>
                    <span>All Notifications</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy;{{ date('Y') }} developed by <a href="javascript:void(0);">JTC Solutions Ltd.</a>.
        </div>
    </div>
    <!-- #Footer -->
</aside>