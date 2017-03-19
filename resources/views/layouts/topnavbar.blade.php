<div class="row border-bottom">
    <nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
              <div class="form-group">
                  <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
              </div>
          </form>
      </div>
        <ul class="nav navbar-top-links navbar-right">
          <li>
              <span class="m-r-sm text-muted welcome-message">Welcome to the Edynos dashboard!</span>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                  <i class="fa fa-bell"></i>  <span class="label label-primary">1</span>
              </a>
              <ul class="dropdown-menu dropdown-alerts">
                  <li>
                      <a href="mailbox.html">
                          <div>
                              <i class="fa fa-envelope fa-fw"></i> You have 1 message.
                              <span class="pull-right text-muted small">4 minutes ago</span>
                          </div>
                      </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                      <div class="text-center link-block">
                          <a href="notifications.html">
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </div>
                  </li>
              </ul>
          </li>
          <li>
            <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
         </li>
      </ul>
  </nav>
</div>
          <!-- Authentication Links -->
          {{-- @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->username }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
        </ul>
    </nav>
</div> --}}
