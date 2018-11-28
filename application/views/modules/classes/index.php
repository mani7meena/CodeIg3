<div class="row">
	<div class="col-lg-12 col-xs-12 add_class">
		<a href="#" class="btn btn-social btn-linkedin" data-toggle="modal" data-target="#modal-center">
			<i class="fa fa-plus"></i>
			Add Class
		</a>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="pre_school">
			<a href="#" class="badge badge-pill badge-info">
				<button>
					Pre-School
					<span>12</span>
				</button>
			</a>
		</div>
	</div>
	<div class="col">
		<div class="elementary">
			<a href="#" class="badge badge-pill badge-danger">
				<button>
					Elementary
					<span>12</span>
				</button>
			</a>
		</div>
	</div>
	<div class="col">
		<div class="kindergarden">
			<a href="#" class="badge badge-pill badge-yellow">
				<button>
					Kindergarten
					<span>12</span>
				</button>
			</a>
		</div>
	</div>
	<div class="col">
		<div class="grade_1">
			<a href="#" class="badge badge-pill badge-brown">
				<button>
					1<sup>st</sup> Graders
					<span>12</span>
				</button>
			</a>	
		</div>
	</div>
	<div class="col">
		<div class="grade_2">
			<a href="#" class="badge badge-pill badge-success">
				<button>
					1<sup>st</sup> Graders
					<span>12</span>
				</button>
			</a>	
		</div>
	</div>
</div>

<?php
$query = $this->db->get('classes')->result();
?>
<div class="row">
<table class="table table-bordered table-responsive">
  <tr>
    <th style="width: 10px">#</th>
    <th>Name</th>
    <th>Capacity</th>
    <th>Gender</th>
    <th>Color</th>
    <th>Created At</th>
  </tr>
  <?php if (!empty($query)) {?>
        <?php foreach ($query as $row): ?>
  <tr>
    <td><?php echo $row->id ?></td>
    <td><?php echo $row->name_of_class ?></td>
    <td><?php echo $row->capacity_of_the_class ?></td>
    <td><?php echo $row->gender ?></td>
    <td><?php echo $row->color ?></td>
    <td><?php echo format_date($row->created_at, false) ?></td>
  </tr>
  <?php endforeach;?>
    <?php } else {?>
      <tr>
        <td colspan="6">
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle"></i> <?php echo lang('no_results_found'); ?>
          </div>
        </td>  
      </tr>  
    <?php }?>
</table>
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

<!-- Modal -->
	<div class="modal center-modal fade" id="modal-center" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<?php echo form_open('classes/create'); ?>
            <div class="modal-body">
                <label><?php echo lang('Name_of_class'); ?></label>
                <input class="form-control" type="text" name="name_of_class" value="" required=""/>

                <label><?php echo lang('Capacity_of_the_class'); ?></label>
                <input class="form-control" type="text" name="capacity_of_the_class" value="" required=""/>
                
                <!--<label><?php echo lang('national_id'); ?> </label>
                <input class="form-control" type="text" name="national_id" value="" required=""/>-->
                
                <label><?php echo lang('Age_group'); ?></label>
                <select class="form-control" name="gender" required>
                    <option value="male"><?php echo lang('male'); ?></option>
                    <option value="female"><?php echo lang('female'); ?></option>
                    <option value="other"><?php echo lang('other'); ?></option>
                </select>
                
                <label><?php echo lang('Color'); ?></label>
                <input class="form-control" id="color" type="text" name="color" value="" required="" placeholder="Color"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('close'); ?></button>
                <button class="btn btn-primary"><?php echo lang('Create class'); ?></button>
            </div>
            <?php echo form_close(); ?>
		  </div>
		  <!--<div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-bold btn-pure btn-primary float-right">Save changes</button>
		  </div>-->
		</div>
	  </div>
	</div>
  <!-- /.modal -->