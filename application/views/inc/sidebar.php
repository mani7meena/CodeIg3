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
        <!--<ul class="sidebar-menu">
        
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
                    <!--small class="badge pull-right bg-red">3</small->
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

        </ul>-->
        
        <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="index.html">
			<img src="<?php echo base_url();?>/images/user5-128x128.jpg" alt="user">
            <span>Juliya Brus</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="<?php echo site_url('profile'); ?>">My Profile </a></li>
			<li><a href="javascript:void()">My Balance</a></li>
			<li><a href="javascript:void()">Inbox</a></li>
			<li><a href="javascript:void()">Account Setting</a></li>
			<li><a href="javascript:void()">Logout</a></li>
          </ul>
        </li>
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="<?php echo set_active('dashboard'); ?>">
          <a href="<?php echo site_url('dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('children'); ?>">
          <a href="<?php echo site_url('children'); ?>">
            <i class="fa fa-child"></i> <span>Children</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('classes'); ?>">
          <a href="<?php echo site_url('classes'); ?>">
            <i class="fa fa-building"></i> <span>Class</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('calendar'); ?>">
          <a href="<?php echo site_url('calendar'); ?>">
            <i class="fa fa-calendar"></i> <span>Calender</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('chat'); ?>">
          <a href="<?php echo site_url('chat'); ?>">
            <i class="fa fa-commenting-o"></i> <span>Chat</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('users'); ?>">
          <a href="<?php echo site_url('users'); ?>">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('tickets'); ?>">
          <a href="<?php echo site_url('tickets'); ?>">
            <i class="fa fa-ticket"></i> <span>Tickets</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
          <ul class="treeview-menu">
		<li><a href="<?php echo site_url('contact'); ?>">Submit a Feedback</a></li>
		
	  </ul>
        </li>
        
        <li class="<?php echo set_active('contact'); ?>">
          <a href="<?php echo site_url('contact'); ?>">
            <i class="fa fa-volume-control-phone"></i> <span>Contact</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="<?php echo site_url('mail'); ?>">Mail Box</a></li>
			<li><a href="<?php echo site_url('contact'); ?>">Compose</a></li>
			<li><a href="javascript:void(0);">Inbox</a></li>
			<li><a href="javascript:void(0);">Account Setting</a></li>
			<li><a href="javascript:void(0);">Logout</a></li>
		  </ul>
        </li>
        <li class="<?php echo set_active('staff'); ?>">
          <a href="<?php echo site_url('staff'); ?>">
            <i class="fa fa-male"></i> <span>Staff</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('nutrition'); ?>">
          <a href="<?php echo site_url('nutrition'); ?>">
            <i class="fa fa-user-md"></i> <span>Nutrition</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('invoice'); ?>">
          <a href="<?php echo site_url('invoice'); ?>">
            <i class="fa fa-print"></i> <span>Billing</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <li class="<?php echo set_active('reports'); ?>">
          <a href="<?php echo site_url('reports'); ?>">
            <i class="fa fa-file-text"></i> <span>Reports</span>
            <span class="pull-right-container">
<!--              <i class="fa fa-angle-right pull-right"></i>-->
            </span>
          </a>
        </li>
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>App</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
<!--            <li><a href="pages/app/app-chat.html">Chat app</a></li>->
            <li><a href="pages/app/app-contact.html">Contact / Employee</a></li>
            <li><a href="pages/app/app-ticket.html">Support Ticket</a></li>
			<li><a href="pages/app/calendar.html">Calendar</a></li>
            <li><a href="pages/app/profile.html">Profile</a></li>
            <li><a href="pages/app/userlist-grid.html">Userlist Grid</a></li>
			<li><a href="pages/app/userlist.html">Userlist</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/mailbox/mailbox.html">Inbox</a></li>
            <li><a href="pages/mailbox/compose.html">Compose</a></li>
            <li><a href="pages/mailbox/read-mail.html">Read</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/badges.html">Badges</a></li>
            <li><a href="pages/UI/border-utilities.html">Border</a></li>
            <li><a href="pages/UI/buttons.html">Buttons</a></li>
            <li><a href="pages/UI/bootstrap-switch.html">Bootstrap Switch</a></li>
            <li><a href="pages/UI/cards.html">User Card</a></li>
            <li><a href="pages/UI/color-utilities.html">Color</a></li>
			<li><a href="pages/UI/date-paginator.html">Date Paginator</a></li>
            <li><a href="pages/UI/dropdown.html">Dropdown</a></li>
            <li><a href="pages/UI/dropdown-grid.html">Dropdown Grid</a></li>
            <li><a href="pages/UI/general.html">General</a></li>
            <li><a href="pages/UI/icons.html">Icons</a></li>
            <li><a href="pages/UI/media-advanced.html">Advanced Medias</a></li>
			<li><a href="pages/UI/modals.html">Modals</a></li>
            <li><a href="pages/UI/nestable.html">Nestable</a></li>
            <li><a href="pages/UI/notification.html">Notification</a></li>
            <li><a href="pages/UI/portlet-draggable.html">Draggable Portlets</a></li>
            <li><a href="pages/UI/ribbons.html">Ribbons</a></li>
            <li><a href="pages/UI/sliders.html">Sliders</a></li>
            <li><a href="pages/UI/sweatalert.html">Sweet Alert</a></li>
            <li><a href="pages/UI/tab.html">Tabs</a></li>
            <li><a href="pages/UI/timeline.html">Timeline</a></li>
            <li><a href="pages/UI/timeline-horizontal.html">Horizontal Timeline</a></li>			  
          </ul>
        </li>
        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/widgets/blog.html">Blog</a></li>
            <li><a href="pages/widgets/chart.html">Chart</a></li>
            <li><a href="pages/widgets/list.html">List</a></li>
            <li><a href="pages/widgets/social.html">Social</a></li>
            <li><a href="pages/widgets/statistic.html">Statistic</a></li>
            <li><a href="pages/widgets/weather.html">Weather</a></li>
            <li><a href="pages/widgets/widgets.html">Widgets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/boxed.html">Boxed</a></li>
            <li><a href="pages/layout/fixed.html">Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
          </ul>
        </li>		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-square-o"></i>
            <span>Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/box/advanced.html">Advanced</a></li>
            <li><a href="pages/box/basic.html">Boxed</a></li>
            <li><a href="pages/box/color.html">Color</a></li>
			<li><a href="pages/box/group.html">Group</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html">ChartJS</a></li>
            <li><a href="pages/charts/flot.html">Flot</a></li>
            <li><a href="pages/charts/inline.html">Inline charts</a></li>
            <li><a href="pages/charts/morris.html">Morris</a></li>
            <li><a href="pages/charts/peity.html">Peity</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/advanced.html">Advanced Elements</a></li>
            <li><a href="pages/forms/code-editor.html">Code Editor</a></li>
            <li><a href="pages/forms/editor-markdown.html">Markdown</a></li>
            <li><a href="pages/forms/editors.html">Editors</a></li>
            <li><a href="pages/forms/form-validation.html">Form Validation</a></li>
            <li><a href="pages/forms/form-wizard.html">Form Wizard</a></li>
            <li><a href="pages/forms/general.html">General Elements</a></li>
            <li><a href="pages/forms/mask.html">Formatter</a></li>
            <li><a href="pages/forms/xeditable.html">Xeditable Editor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html">Simple tables</a></li>
            <li><a href="pages/tables/data.html">Data tables</a></li>
            <li><a href="pages/tables/editable-tables.html">Editable Tables</a></li>
            <li><a href="pages/tables/table-color.html">Table Color</a></li>
          </ul>
        </li>
		<li>
          <a href="pages/email/index.html">
            <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/map/map-google.html">Google Map</a></li>
            <li><a href="pages/map/map-vector.html">Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i> <span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/extension/fullscreen.html">Fullscreen</a></li>
          </ul>
        </li>        
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/samplepage/blank.html">Blank</a></li>
            <li><a href="pages/samplepage/coming-soon.html">Coming Soon</a></li>
            <li><a href="pages/samplepage/custom-scroll.html">Custom Scrolls</a></li>
			<li><a href="pages/samplepage/faq.html">FAQ</a></li>
			<li><a href="pages/samplepage/gallery.html">Gallery</a></li>
			<li><a href="pages/samplepage/invoice.html">Invoice</a></li>
			<li><a href="pages/samplepage/lightbox.html">Lightbox Popup</a></li>
			<li><a href="pages/samplepage/pace.html">Pace</a></li>
			<li><a href="pages/samplepage/pricing.html">Pricing</a></li>
            <li class="treeview">
              <a href="#">Authentication 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/samplepage/login.html">Login</a></li>
                <li><a href="pages/samplepage/register.html">Register</a></li>
                <li><a href="pages/samplepage/lockscreen.html">Lockscreen</a></li>
                <li><a href="pages/samplepage/user-pass.html">Recover password</a></li>				  
              </ul>
            </li>            
			<li class="treeview">
              <a href="#">Error Pages 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/samplepage/404.html">404</a></li>
                <li><a href="pages/samplepage/500.html">500</a></li>
                <li><a href="pages/samplepage/maintenance.html">Maintenance</a></li>		  
              </ul>
            </li> 
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>-->        
        
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