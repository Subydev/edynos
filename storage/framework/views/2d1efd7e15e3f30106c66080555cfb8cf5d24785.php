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
              <span class="m-r-sm text-muted welcome-message">Welcome to the Edynos dashboard.</span>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                  <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
              </a>
              <ul class="dropdown-menu dropdown-messages">
                  <li>
                      <div class="dropdown-messages-box">
                          <a href="profile.html" class="pull-left">
                              <img alt="image" class="img-circle" src="img/a7.jpg">
                          </a>
                          <div class="media-body">
                              <small class="pull-right">46h ago</small>
                              <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                              <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                          </div>
                      </div>
                  </li>
          <!-- Authentication Links -->
          <?php if(Auth::guest()): ?>
              <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
              <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
          <?php else: ?>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="<?php echo e(url('/logout')); ?>"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                              <?php echo e(csrf_field()); ?>

                          </form>
                      </li>
                  </ul>
              </li>
          <?php endif; ?>
        </ul>
    </nav>
</div>
