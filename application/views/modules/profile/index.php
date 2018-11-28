<!--
<div class="row">
    <div class="col-lg-6">
        <div class="box box-solid box-warning">
            <div class="box-header">
                <h3 class="box-title"><?php echo lang('user_data'); ?></h3>
            </div>
            <div class="box-body">
                <table class="table">
                    <tr>
                        <td><?php echo lang('first_name'); ?></td>
                        <td><?php echo $user->first_name; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('last_name'); ?></td>
                        <td><?php echo $user->last_name; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('last_login'); ?></td>
                        <td><?php echo format_date($user->last_login); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('registration_date'); ?></td>
                        <td><?php echo format_date($user->created_at); ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="box box-solid box-warning">
            <div class="box-header">
                <h3 class="box-title"><?php echo lang('change_pin'); ?></h3>
            </div>
            <div class="box-body">
                <?php echo form_open('profile/change_pin'); ?>
                <table class="table no-border">
                    <tr>
                        <td><?php echo lang('pin'); ?></td>
                        <td><input type="text" name="pin" value="<?php echo $user->pin; ?>"
                                   class="form-control" required=""/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-right">
                            <button class="btn btn-warning"><?php echo lang('submit'); ?></button>
                        </td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="box box-solid box-info">
            <div class="box-header">
                <h3 class="box-title"><?php echo lang('contact_information'); ?></h3>
            </div>
            <div class="box-body">
                <?php echo form_open('profile/update_user_data'); ?>
                <table class="table no-border">
                    <tr>
                        <td><?php echo lang('phone'); ?></td>
                        <td><input type="text" name="phone" value="<?php echo $user->phone; ?>"
                                   class="form-control" required=""/></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('other_phone'); ?></td>
                        <td><input type="text" name="phone2" value="<?php echo $user->phone2; ?>"
                                   class="form-control"/></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('address'); ?></td>
                        <td><input type="text" required name="country" value="<?php echo $user->address; ?>"
                                   class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-right">
                            <button class="btn btn-info"><?php echo lang('submit'); ?></button>
                        </td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo lang('update_email'); ?></h3>
            </div>
            <div class="box-body">
                <?php echo form_open('profile/update_email'); ?>
                <table class="table no-border">
                    <tr>
                        <td><?php echo lang('current_password'); ?></td>
                        <td><input type="password" name="password" class="form-control" required=""/></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('email'); ?></td>
                        <td><input type="text" name="email" value="<?php echo $user->email; ?>" class="form-control"
                                   required=""/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-right">
                            <button class="btn btn-primary"><?php echo lang('submit'); ?></button>
                        </td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="box box-solid box-danger">
            <div class="box-header">
                <h3 class="box-title"><?php echo lang('change_password'); ?></h3>
            </div>
            <div class="box-body">
                <?php echo form_open('profile/change_password'); ?>
                <table class="table no-border">
                    <tr>
                        <td><?php echo lang('current_password'); ?></td>
                        <td><input type="password" name="password" class="form-control" required=""/></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('new_password'); ?></td>
                        <td><input type="password" name="new_password" value="" class="form-control" required=""/></td>
                    </tr>
                    <tr>
                        <td><?php echo lang('confirm_password'); ?></td>
                        <td><input type="password" name="new_password_confirm" value="" class="form-control"
                                   required=""/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-right">
                            <button class="btn btn-danger"><?php echo lang('submit'); ?></button>
                        </td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>-->


<div class="row">
        <div class="col-xl-4 col-lg-5">

          <!-- Profile Image -->
          <div class="box">
            <div class="box-body box-profile">
              <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="<?php echo base_url();?>/images/5.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Jhone Mical</h3>

              <p class="text-muted text-center">Accoubts Manager Jindal Cop.</p>
				
              <div class="row social-states">
				  <div class="col-6 text-right"><a href="#" class="link"><i class="ion ion-ios-people-outline"></i> 254</a></div>
				  <div class="col-6 text-left"><a href="#" class="link"><i class="ion ion-images"></i> 54</a></div>
			  </div>
              
              <div class="row">
              	 <ul class="sidebar-menu1">
					<li class="<?php echo set_active('dashboard'); ?>">
					  <a href="<?php echo site_url('dashboard'); ?>">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					  </a>
					</li>
					<li class="<?php echo set_active('health'); ?>">
					  <a href="<?php echo site_url('health'); ?>">
						<i class="fa fa-medkit"></i> <span>Health</span>
					  </a>
					</li>
					<li class="<?php echo set_active('notes'); ?>">
					  <a href="<?php echo site_url('notes'); ?>">
						<i class="fa fa-pencil-square-o"></i> <span>Notes</span>
					  </a>
					</li>
					<li class="<?php echo set_active('billing'); ?>">
					  <a href="<?php echo site_url('billing'); ?>">
						<i class="fa fa-print"></i> <span>Billing</span>
					  </a>
					</li>
					<li class="<?php echo set_active('rates'); ?>">
					  <a href="<?php echo site_url('rates'); ?>">
						<i class="fa fa-star-half-o"></i> <span>Rates</span>
					  </a>
					</li>
					<li class="<?php echo set_active('attendance'); ?>">
					  <a href="<?php echo site_url('attendance'); ?>">
						<i class="fa fa-file-text-o"></i> <span>Attendance</span>
					  </a>
					</li>
				  </ul>
              </div>
              
              <div class="row">
              	<div class="col-12">
              		<div class="profile-user-info">
						<p>Email address </p>
						<h6 class="margin-bottom">jhone.mical@yahoo.com</h6>
						<p>Phone</p>
						<h6 class="margin-bottom">+11 123 456 7890</h6> 
						<p>Address</p>
						<h6 class="margin-bottom">123, Lorem Ipsum, Florida, USA</h6>
						<div class="map-box">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<p class="margin-bottom">Social Profile</p>
						<div class="user-social-acount">
							<button class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button>
							<button class="btn btn-circle btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button>
							<button class="btn btn-circle btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button>
						</div>
					</div>
             	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-8 col-lg-7">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="#Medications" data-toggle="tab">Medications</a></li>
              <li><a href="#Allergies" data-toggle="tab">Allergies</a></li>
              <li><a href="#Food" data-toggle="tab">Food Preferences</a></li>
              <li><a href="#activity" data-toggle="tab">Emergency contacts</a></li>
              <li><a href="#settings" data-toggle="tab">Healthcare Providers</a></li>
              <li><a href="#settings" data-toggle="tab">Immunization</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="Medications">
                <!-- The timeline -->
                <ul class="timeline">
					<!-- timeline time label -->
					<li class="time-label">
						  <span class="bg-info">
							15 Jan. 2017
						  </span>
					</li>
					<!-- /.timeline-label -->
					<!-- timeline item -->
					<li>
					  <i class="ion ion-email bg-blue"></i>

					  <div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 11:48</span>

						<h3 class="timeline-header"><a href="#">Genelia</a> sent you an email</h3>

						<div class="timeline-body">
						  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ...
						</div>
						<div class="timeline-footer text-right">
						  <a href="#" class="btn btn-primary btn-sm">Read more</a>
						  <a href="#" class="btn btn-danger btn-sm">Delete</a>
						</div>
					  </div>
					</li>
					<!-- END timeline item -->
					<!-- timeline item -->
					<li>
					  <i class="ion ion-person bg-green"></i>

					  <div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 11 mins ago</span>

						<h3 class="timeline-header no-border"><a href="#">Ritesh Deshmukh</a> accepted your friend request</h3>
					  </div>
					</li>
					<!-- END timeline item -->
					<!-- timeline item -->
					<li>
					  <i class="ion ion-chatbubble-working bg-purple"></i>

					  <div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 55 mins ago</span>

						<h3 class="timeline-header"><a href="#">Jone Doe</a> commented on your post</h3>

						<div class="timeline-body">
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.
						</div>
						<div class="timeline-footer text-right">
						  <a class="btn bg-purple btn-flat btn-sm">View comment</a>
						</div>
					  </div>
					</li>
					<!-- END timeline item -->
					<!-- timeline time label -->
					<li class="time-label">
						  <span class="bg-info">
							15 Nov. 2016
						  </span>
					</li>
					<!-- /.timeline-label -->
					<!-- timeline item -->
					<li>
					  <i class="ion ion-ios-reverse-camera bg-yellow"></i>

					  <div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 8 days ago</span>

						<h3 class="timeline-header"><a href="#">Rakesh Kumar</a> uploaded new photos</h3>

						<div class="timeline-body">
						  <img src="<?php echo base_url();?>/images/150x100.png" alt="..." class="margin">
						  <img src="<?php echo base_url();?>/images/150x100.png" alt="..." class="margin">
						  <img src="<?php echo base_url();?>/images/150x100.png" alt="..." class="margin">
						  <img src="<?php echo base_url();?>/images/150x100.png" alt="..." class="margin">
						</div>
					  </div>
					</li>
					<!-- END timeline item -->
					<!-- timeline item -->
					<li>
					  <i class="ion ion-ios-videocam bg-pink"></i>

					  <div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 18 days ago</span>

						<h3 class="timeline-header"><a href="#">Ajay Varma</a> shared a video</h3>

						<div class="timeline-body">
						  <div class="embed-responsive embed-responsive-16by9">
							<iframe width="854" height="480" src="https://www.youtube.com/embed/k85mRPqvMbE" frameborder="0" allowfullscreen></iframe>
						  </div>
						</div>
						<div class="timeline-footer text-right">
						  <a href="#" class="btn btn-sm bg-purple">See comments</a>
						</div>
					  </div>
					</li>
					<!-- END timeline item -->
					<li>
					  <i class="fa fa-clock-o bg-gray"></i>
					</li>
				  </ul>
              </div>    
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="Allergies">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-bordered-sm rounded-circle" src="<?php echo base_url();?>/images/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">John Doe</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">5 minutes ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="activitytimeline">
					  <p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
					  </p>
					  <ul class="list-inline">
						<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
						<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
						</li>
						<li class="pull-right">
						  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
							(5)</a></li>
					  </ul>
					  <form class="form-element">
						  <input class="form-control input-sm" type="text" placeholder="Type a comment">
					 </form>
                  </div>
                </div>
                <!-- /.post -->
                
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-bordered-sm rounded-circle" src="<?php echo base_url();?>/images/user6-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">John Doe</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">5 minutes ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="activitytimeline">
					  <div class="row margin-bottom">
						<div class="col-sm-6">
						  <img class="img-fluid" src="<?php echo base_url();?>/images/photo1.png" alt="Photo">
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
						  <div class="row">
							<div class="col-sm-6">
							  <img class="img-fluid" src="<?php echo base_url();?>/images/photo2.png" alt="Photo">
							  <br><br>
							  <img class="img-fluid" src="<?php echo base_url();?>/images/photo3.jpg" alt="Photo">
							</div>
							<!-- /.col -->
							<div class="col-sm-6">
							  <img class="img-fluid" src="<?php echo base_url();?>/images/photo4.jpg" alt="Photo">
							  <br><br>
							  <img class="img-fluid" src="<?php echo base_url();?>/images/photo1.png" alt="Photo">
							</div>
							<!-- /.col -->
						  </div>
						  <!-- /.row -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->

					  <ul class="list-inline">
						<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
						<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
						</li>
						<li class="pull-right">
						  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
							(5)</a></li>
					  </ul>

					  <form class="form-element">
						  <input class="form-control input-sm" type="text" placeholder="Type a comment">
					 </form>
					</div>
				</div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-bordered-sm rounded-circle" src="<?php echo base_url();?>/images/user7-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">John Doe</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">5 minutes ago</span>
                  </div>
                  <!-- /.user-block -->
                    <div class="activitytimeline">
					  <p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
					  </p>

					  <form class="form-horizontal form-element">
						<div class="form-group row no-gutters">
						  <div class="col-sm-9">
							<input class="form-control input-sm" placeholder="Response">
						  </div>
						  <div class="col-sm-3">
							<button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
						  </div>
						</div>
					  </form>
					</div>
                </div>
                <!-- /.post -->
                
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="Food">
                <form class="form-horizontal form-element col-12">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <div class="checkbox">
                       	<input type="checkbox" id="basic_checkbox_1" checked="">
						<label for="basic_checkbox_1"> I agree to the</label>
                          &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
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
