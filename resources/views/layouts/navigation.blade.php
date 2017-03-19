<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/gitwhite1.png" />
                            </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-normal">{{ Auth::user()->username }}</strong>
                        </span> <span class="text-muted text-md block">Edit Profile <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Dashboard</a></li>
                                <li class="divider"></li>
                                <li>  <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                </div>
                <div class="logo-element">
                    Ed
                </div>
            </li>
             <li class="{{ (Request::is('home') ? 'active' : '') }}">
                <a href="{{ route('home') }}"><i class="fa fa-tachometer"></i><span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ (Request::is('upload') ? 'active' : '') }}">
                <a href="{{ route('upload') }}"><i class="fa fa-cloud-upload"></i><span class="nav-label">Upload Logs</span></a>
            </li>
            <li class="{{ (Request::is('activity') ? 'active' : '') }}">
                <a href="{{ route('activity') }}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Log Activity</span></a>
            </li>
            <li class="{{ (Request::is('table') ? 'active' : '') }}">
                <a href="{{ route('table') }}"><i class="fa fa-address-card-o"></i><span class="nav-label">Table Views</span></a>
            </li>
            <li class="{{ (Request::is('forum') ? 'active' : '') }}">
                <a href="{{ route('forum') }}"><i class="fa fa-code"></i><span class="nav-label">Discussion</span></a>
            </li>
            <li class="{{ (Request::is('faq') ? 'active' : '') }}">
                <a href="{{ route('faq') }}"><i class="fa fa-question"></i><span class="nav-label">FAQ</span></a>
            </li>
        </ul>
    </div>
</nav>
