<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                
                            </span> <span class="text-muted text-xs block">Edit Profile <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
             <li class="<?php echo e((Request::is('home') ? 'active' : '')); ?>">
                <a href="<?php echo e(url('home')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">Dashboard</span></a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">Create</span> </a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">My Charts</span> </a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">Forums</span> </a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">Gallery</span> </a>
            </li>
            <li class="<?php echo e((Request::is('minor') ? 'active' : '')); ?>">
                <a href="<?php echo e(route('minor')); ?>"><i class="fa fa-th-large"></i><span class="nav-label">Activity</span> </a>
            </li>
        </ul>

    </div>
</nav>
