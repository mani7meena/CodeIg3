<div class="row">
        <div class="col-lg-3 col-md-12">
			<div class="box">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						<li class="box-label"><a href="javascript:void(0)">All Contacts <span>123</span></a></li>
						<li class="divider"></li>
						<li><a href="javascript:void(0)">Work <span>103</span></a></li>
						<li><a href="javascript:void(0)">Family <span>19</span></a></li>
						<li><a href="javascript:void(0)">Friends <span>623</span></a></li>
						<li><a href="javascript:void(0)">Private <span>53</span></a></li>
						<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-info text-white mt-10">+ Create New Label</a></li>
						<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Add Lable</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<from class="form-horizontal">
											<div class="form-group">
												<label class="col-md-12">Name of Label</label>
												<div class="col-md-12">
													<input type="text" class="form-control" placeholder="type name"> </div>
											</div>
											<div class="form-group">
												<label class="col-md-12">Select Number of people</label>
												<div class="col-md-12">
													<select class="form-control">
														<option>All Contacts</option>
														<option>10</option>
														<option>20</option>
														<option>30</option>
														<option>40</option>
														<option>Custome</option>
													</select>
												</div>
											</div>
										</from>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
										<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
					</ul>
				</div>
			  </div>
            </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-md-12">
          <div class="box">
			    <div class="box-header with-border">
				  <h3 class="box-title">Contacts / Employee List</h3>
				</div>
            <div class="box-body">
              <div class="table-responsive">
				<table id="employeelist" class="table table-hover no-wrap" data-page-size="10">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Role</th>
							<th>Age</th>
							<th>Joining date</th>
							<th>Salery</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Genelia Deshmukh</a>
							</td>
							<td>genelia@gmail.com</td>
							<td>+123 456 789</td>
							<td><span class="label label-danger">Designer</span> </td>
							<td>23</td>
							<td>12-10-2014</td>
							<td>$1200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Arijit Singh</a>
							</td>
							<td>arijit@gmail.com</td>
							<td>+234 456 789</td>
							<td><span class="label label-info">Developer</span> </td>
							<td>26</td>
							<td>10-09-2014</td>
							<td>$1800</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" /> Govinda jalan</a>
							</td>
							<td>govinda@gmail.com</td>
							<td>+345 456 789</td>
							<td><span class="label label-success">Accountant</span></td>
							<td>28</td>
							<td>1-10-2013</td>
							<td>$2200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Hritik Roshan</a>
							</td>
							<td>hritik@gmail.com</td>
							<td>+456 456 789</td>
							<td><span class="label label-inverse">HR</span></td>
							<td>25</td>
							<td>2-10-2017</td>
							<td>$200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> John Abraham</a>
							</td>
							<td>john@gmail.com</td>
							<td>+567 456 789</td>
							<td><span class="label label-danger">Manager</span></td>
							<td>23</td>
							<td>10-9-2015</td>
							<td>$1200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Pawandeep kumar</a>
							</td>
							<td>pawandeep@gmail.com</td>
							<td>+678 456 789</td>
							<td><span class="label label-warning">Chairman</span></td>
							<td>29</td>
							<td>10-5-2013</td>
							<td>$1500</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ritesh Deshmukh</a>
							</td>
							<td>ritesh@gmail.com</td>
							<td>+123 456 789</td>
							<td><span class="label label-danger">Designer</span></td>
							<td>35</td>
							<td>05-10-2012</td>
							<td>$3200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> Salman Khan</a>
							</td>
							<td>salman@gmail.com</td>
							<td>+234 456 789</td>
							<td><span class="label label-info">Developer</span></td>
							<td>27</td>
							<td>11-10-2014</td>
							<td>$1800</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Govinda jalan</a>
							</td>
							<td>govinda@gmail.com</td>
							<td>+345 456 789</td>
							<td><span class="label label-success">Accountant</span></td>
							<td>18</td>
							<td>12-5-2017</td>
							<td>$100</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sonu Nigam</a>
							</td>
							<td>sonu@gmail.com</td>
							<td>+456 456 789</td>
							<td><span class="label label-inverse">HR</span></td>
							<td>36</td>
							<td>18-5-2009</td>
							<td>$4200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" /> Varun Dhawan</a>
							</td>
							<td>varun@gmail.com</td>
							<td>+567 456 789</td>
							<td><span class="label label-danger">Manager</span></td>
							<td>43</td>
							<td>12-10-2010</td>
							<td>$5200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>12</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Genelia Deshmukh</a>
							</td>
							<td>genelia@gmail.com</td>
							<td>+123 456 789</td>
							<td><span class="label label-danger">Designer</span> </td>
							<td>23</td>
							<td>12-10-2014</td>
							<td>$1200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>13</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Arijit Singh</a>
							</td>
							<td>arijit@gmail.com</td>
							<td>+234 456 789</td>
							<td><span class="label label-info">Developer</span> </td>
							<td>26</td>
							<td>10-09-2014</td>
							<td>$1800</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>14</td>
							<td>
								<a href="profile.html"><img src="<?php echo base_url();?>/images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Govinda jalan</a>
							</td>
							<td>govinda@gmail.com</td>
							<td>+345 456 789</td>
							<td><span class="label label-success">Accountant</span></td>
							<td>28</td>
							<td>1-10-2013</td>
							<td>$2200</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
							</td>
							<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<from class="form-horizontal form-element">												
												<div class="col-md-12 m-b-20">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Type name"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Email"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Phone"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Designation"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Age"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Date of joining"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Salary"> </div>
													<div class="form-group">
														<div class="fileupload btn btn-danger">
															<div class="file-group">
															  <span><i class="fa fa-camera file-browser mr-10"></i>Upload Contact Image</span>
															  <input type="file">
															</div>
														</div>
													</div>
												</div>
											</from>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
											<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<td colspan="7">
								<div class="text-right">
									<ul class="pagination"> </ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
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