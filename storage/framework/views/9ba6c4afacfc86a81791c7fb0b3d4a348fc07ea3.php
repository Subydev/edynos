<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/gitwhite1.png" />
                            </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo e(Auth::user()->username); ?></strong>
                        </span> <span class="text-muted text-md block">Edit Profile <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Dashboard</a></li>
                                <li class="divider"></li>
                                <li>  <a href="<?php echo e(url('/logout')); ?>"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
             <li class="<?php echo e((Request::is('home') ? 'active' : '')); ?>">
                <a href="<?php echo e(url('home')); ?>"><i class="fa fa-tachometer"></i><span class="nav-label">Dashboard</span></a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">Create</span></a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">My Charts</span></a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-address-card-o"></i><span class="nav-label">Forums</span></a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span></a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">Activity</span></a>
            </li>
        </ul>

    </div>
</nav>
