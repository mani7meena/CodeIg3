<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   
    
    <section class="sidebar">
       
        <!-- search form -->
        <!--form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
            </div>
        </form-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
        
        	<li class="user-profile treeview">
              <a href="index.html">
                 <?php $this->user->getPhoto(NULL, 'class="img-circle"'); ?>
                <span><?php echo lang('hello'); ?>, <?php echo 'Admin'; ?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="javascript:void(0);">My Profile </a></li>
                <li><a href="javascript:void(0);">My Balance</a></li>
                <li><a href="javascript:void(0);">Inbox</a></li>
                <li><a href="javascript:void(0);">Account Setting</a></li>
                <li><a href="javascript:void(0);">Logout</a></li>
              </ul>
            </li>
            
            <li class="<?php echo set_active('dashboard'); ?>">
                <a href="<?php echo site_url('dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span><?php echo lang('dashboard'); ?></span>
                </a>
            </li>

            <li class="<?php echo set_active(array('children','child')); ?>">
                <a href="<?php echo site_url('children'); ?>">
                    <i class="fa fa-users"></i> <span><?php echo lang('children'); ?></span>
                     <span class="pull-right-container">
                  <small class="badge pull-right bg-green"><?php echo $this->child->getCount(); ?></small>
                </span>
                        
                </a>
            </li>

            <?php if(is('superadmin') || is('admin') || is('manager')): ?>
            <li class="<?php echo set_active('users'); ?>">
                <a href="<?php echo site_url('users'); ?>">
                    <i class="fa fa-user"></i> <span><?php echo lang('users'); ?></span>
                    <small class="badge pull-right bg-blue"><?php echo $this->user->getCount(); ?></small>
                </a>
            </li>
            <?php endif; ?>

            <li class="<?php echo set_active('calendar'); ?>">
                <a href="<?php echo site_url('calendar'); ?>">
                    <i class="fa fa-calendar"></i> <span><?php echo lang('calendar'); ?></span>
                    <!--small class="badge pull-right bg-red">3</small-->
                </a>
            </li>
            <li class="<?php echo set_active(['news']); ?>">
                <a href="<?php echo site_url('news'); ?>">
                    <i class="fa fa-clipboard"></i>
                    <span><?php echo lang('news'); ?></span>
                </a>
            </li>

            <?php if(is('superadmin') || is('admin')): ?>
            <li class="<?php echo set_active('settings'); ?>">
                <a href="<?php echo site_url('settings'); ?>">
                    <i class="fa fa-gears"></i> <span><?php echo lang('settings'); ?></span>
                </a>
            </li>
            <?php endif; ?>

        </ul>
    </section>
    <!-- /.sidebar -->

    <div class="footer text-center">
        <br/>

        <div style="font-size:11px;padding:5px;">
            &copy; <?php echo date('Y'); ?>
            <?php echo lang('copyright'); ?>
            <br/>
            
        </div>
    </div>
</aside>