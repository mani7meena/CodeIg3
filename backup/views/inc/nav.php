<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"><?php echo lang('toggle_navigation'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <?php if (!is('parent')): ?>
            
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <!--span class="label label-warning">10</span-->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header"><?php echo lang('notifications'); ?></li>
                        <li>

                            <ul class="menu">
                                <li>
                                    <a href="<?php echo site_url('children'); ?>">
                                        <i class="fa fa-users text-aqua"></i>
                                        <small class="badge bg-default"><?php echo $this->child->getCount(); ?></small>
                                        <?php echo lang('enrolled_children'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('users'); ?>">
                                        <i class="fa fa-users text-red"></i>
                                        <small class="badge bg-default"><?php echo $this->user->getCount(); ?></small>
                                        <?php echo lang('registered_users'); ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--li class="footer"><a href="#">View all</a></li-->
                    </ul>
                </li>
            <?php endif; ?>

            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span><?php echo $this->user->user()->last_name; ?>
                        <i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu scale-up">
                    <li class="user-header ">
                        <?php $this->user->getPhoto(NULL, 'class="img-circle"'); ?>
                        <p>
                        </p>
                    </li>

                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo site_url('profile'); ?>" class="btn btn-default btn-flat">
                                <?php echo lang('profile'); ?>
                            </a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo site_url('logout'); ?>" class="btn btn-default btn-flat">
                                <?php echo lang('logout'); ?>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>