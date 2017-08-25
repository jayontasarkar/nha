<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <li role="presentation"><a href="#settings" data-toggle="tab"></a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active in active" id="settings">
            <div class="demo-settings">
                <ul class="setting-list">
                    <li>
                        <span>
                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                <strong>View Profile</strong>
                            </a>
                        </span>
                        <div class="switch">
                            <i class="material-icons">person</i>
                        </div>
                    </li>
                    <li>
                        <span>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout').submit();"
                                class=" waves-effect waves-block"
                            >
                                <strong>Sign Out</strong>
                            </a>
                            <form id="logout" action="{{ route('logout') }}"
                                method="POST" style="display: none;"
                            >
                                {{ csrf_field() }}
                            </form>
                        </span>
                        <div class="switch">
                            <i class="material-icons">input</i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>