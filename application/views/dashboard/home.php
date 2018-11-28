	  <div class="row">
        <div class="col-xl-3 col-md-6 col-12 ">
          	<a href="<?php echo site_url('children'); ?>">
				 <div class="box box-body bg-purple">
				  <div class="flexbox">
					<span class="fa fa-child font-size-50"></span>
					<span class="font-size-40 font-weight-200">12,568</span>
				  </div>
				  <div class="text-right">Children</div>
				</div>
            </a>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          	<a href="<?php echo site_url('users'); ?>">
				 <div class="box box-body bg-red">
				  <div class="flexbox">
					<span class="fa fa-user font-size-50"></span>
					<span class="font-size-40 font-weight-200">8,568</span>
				  </div>
				  <div class="text-right">Users</div>
				</div>
       		</a>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-xl-3 col-md-6 col-12">
          	<a href="<?php echo site_url('article'); ?>">
				 <div class="box box-body">
				  <div class="flexbox">
					<span class="ion ion-ios-paper-outline text-purple font-size-50"></span>
					<span class="font-size-40 font-weight-200">+100</span>
				  </div>
				  <div class="text-right">Article</div>
				</div>
			</a>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          	<a href="<?php echo site_url('invoice'); ?>">
				 <div class="box box-body">
				  <div class="flexbox">
					<span class="ion ion-ios-copy-outline text-red font-size-50"></span>
					<span class="font-size-40 font-weight-200">16,568</span>
				  </div>
				  <div class="text-right">Invoice</div>
				</div>
			</a>
        </div>
        <!-- /.col -->
      </div>
		
      <div class="row">
        <div class="col-xl-12 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart_new" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<!--  
		<div class="col-xl-4 col-12">
            <div class="box">
              <div class="box-header with-border">
                <h5 class="box-title">Top Locations</h5>
				<div class="box-tools pull-right">
					<ul class="card-controls">
					  <li class="dropdown">
						<a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item active" href="#">Today</a>
						  <a class="dropdown-item" href="#">Yesterday</a>
						  <a class="dropdown-item" href="#">Last week</a>
						  <a class="dropdown-item" href="#">Last month</a>
						</div>
					  </li>
					  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
					</ul>
				</div>
              </div>

              <div class="box-body">
                <div class="text-center py-20">
					<div class="donut" data-peity='{ "fill": ["#e9ab2e", "#398bf7", "#06d79c"], "radius": 80, "innerRadius": 60  }' >9,6,5</div>
                </div>

                <ul class="flexbox flex-justified text-center mt-30">
                  <li class="br-1">
                    <div class="font-size-20 text-primary">953</div>
                    <small>New York</small>
                  </li>

                  <li class="br-1">
                    <div class="font-size-20 text-info">813</div>
                    <small>Los Angeles</small>
                  </li>

                  <li>
                    <div class="font-size-20 text-yellow">369</div>
                    <small>Dallas</small>
                  </li>
                </ul>
              </div>
            </div>
          </div>-->
		  
      </div>      
      <!-- /.row -->
	  
	  <div class="row">
		  
          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="linechart" >1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>New Users</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">113</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="barchart">1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>Monthly Sale</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">%80</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 hide">
            <div class="box box-body">
              <div class="flexbox">
                <div id="discretechart">1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>Impressions</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">%80</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
		  
      </div>      
      <!-- /.row -->		
		
              
      <!-- /.row -->
      <div class="row">
		  
		 <div class="col-xl-4 col-lg-6 col-12">	
          <!-- PRODUCT LIST -->
			  <div class="box bg-blue text-center">			
			<div class="box-body">
			  <div class="p-5">
				  <h3 class="white">
					<span class="font-size-30">City, </span>Country
				  </h3>
				  <p class="weather-day-date mb-30">
					<span class="mr-5">MONDAY</span> May 11, 2017
				  </p>
				  <div class="mb-30 weather-icon">
					<canvas class="mr-40 text-top" id="icon1" width="90" height="90"></canvas>
					<div class="inline-block">
					  <span class="font-size-50">29°
						<span class="font-size-40">C</span>
					  </span>
					  <p class="text-left">DAY RAIN</p>
					</div>
				  </div>
				  <div class="row no-space">
					<div class="col-2">
					  <div>
						<div class="mb-10">TUE</div>
						<i class="wi-day-sunny font-size-30 mb-10"></i>
						<div>24°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">WED</div>
						<i class="wi-day-cloudy font-size-30 mb-10"></i>
						<div>21°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">THU</div>
						<i class="wi-day-sunny font-size-30 mb-10"></i>
						<div>25°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">FRI</div>
						<i class="wi-day-cloudy-gusts font-size-30 mb-10"></i>
						<div>20°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">SAT</div>
						<i class="wi-day-lightning font-size-30 mb-10"></i>
						<div>18°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">SUN</div>
						<i class="wi-day-storm-showers font-size-30 mb-10"></i>
						<div>14°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.box-body -->
		  </div>          
		 </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <!-- Widget: user widget style 3 -->
          <div class="box box-widget widget-user-3">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-purple"  style="background: url('<?php echo base_url();?>/images/photo1.png') center center;">
              <div class="info-user">
				  <h3 class="widget-user-username">Invoice Dues</h3>
				  <h6 class="widget-user-desc hide">Developer</h6>
              </div>
              <div class="widget-user-image clearfix hide">
                <img class="rounded-circle" src="<?php echo base_url();?>/images/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
            </div>
            <div class="box-footer no-padding">
              <ul class="nav d-block nav-stacked">
                <li class="nav-item"><a href="#" class="nav-link">Sales <span class="pull-right badge bg-blue">0</span></a></li>
                <li class="nav-item hide"><a href="#" class="nav-link">Projects <span class="pull-right badge bg-green">120</span></a></li>
                <li class="nav-item hide"><a href="#" class="nav-link">Followers <span class="pull-right badge bg-yellow">8K</span></a></li>
                <li class="nav-item hide"><a href="#" class="nav-link">Tasks <span class="pull-right badge bg-red">58</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->			
			
          	<div class="flexbox flex-justified text-center bg-white hide">
              <div class="no-shrink py-30">
                <span class="ion ion-social-facebook font-size-50" style="color: #3b5998"></span>
              </div>

              <div class="py-25 bg-blue">
                <div class="font-size-30">+250</div>
                <span>Likes</span>
              </div>
            </div>
			
        </div>
        <!-- /.col -->  
		  
		  <div class="col-xl-4 col-lg-6 col-12">
          <!-- DIRECT CHAT DANGER -->
          <div class="box direct-chat direct-chat-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Direct Chat</h3>

              <div class="box-tools pull-right">
				<span data-toggle="tooltip" title="1 New Messages" class="badge bg-red">1</span>
				<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
				  <i class="fa fa-comments"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
				</button>
			  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages" id="direct-chat">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">James Anderson</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="<?php echo base_url();?>/images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Michael Jorden</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="<?php echo base_url();?>/images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				 <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">James Anderson</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="<?php echo base_url();?>/images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Michael Jorden</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="<?php echo base_url();?>/images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				  
				  <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">James Anderson</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="<?php echo base_url();?>/images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Michael Jorden</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="<?php echo base_url();?>/images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				  
              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
					<a href="#">
					  <img class="contacts-list-img" src="<?php echo base_url();?>/images/user1-128x128.jpg" alt="User Image">

					  <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Pavan kumar
							  <small class="contacts-list-date pull-right">April 14, 2017</small>
							</span>
						<span class="contacts-list-email">info@.multipurpose.com</span>
					  </div>
					  <!-- /.contacts-list-info -->
					</a>
				  </li>
				  <!-- End Contact Item -->
				  <li>
					<a href="#">
					  <img class="contacts-list-img" src="<?php echo base_url();?>/images/user7-128x128.jpg" alt="User Image">

					  <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Sonu Sud
							  <small class="contacts-list-date pull-right">March 14, 2017</small>
							</span>
						<span class="contacts-list-email">sonu@gmail.com</span>
					  </div>
					  <!-- /.contacts-list-info -->
					</a>
				  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
        </div>
        		  
      </div>
      <!-- /.row -->
      <div class="row">
      	<div class="col-xl-6 col-12">
      		<!-- quick email widget -->
          <div class="box">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
            </div>
          </div>
      	</div>
      	<div class="col-xl-6 col-12">
          <div class="box">
            <div class="box-body no-padding">
              <div id="calendar"></div>
            </div>
          </div>
       </div>      	
      </div>
  
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>