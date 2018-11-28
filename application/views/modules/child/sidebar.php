<!--

<?php $this->load->view('modules/child/childphoto'); ?>
<ul class="list-group" style="margin-top:5px;">
    <li class="list-group-item text-left"><?php echo anchor('child/' . $child->id, '<i class="fa fa-home"></i>' . lang('dashboard'), 'class=" bg-orange"'); ?></li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/health', '<i class="fa fa-medkit"></i><span>' . lang('health')."</span>", 'class="bg-yellow"'); ?>
    </li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/notes', '<i class="fa fa-book"></i>' . lang('notes'), 'class="bg-blue"'); ?>
    </li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/billing', '<i class="fa fa-credit-card"></i>' . lang('invoice'), 'class="bg-black"'); ?>
    </li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/attendance', '<i class="fa fa-clipboard"></i>' . lang('attendance'), 'class="bg-purple"'); ?>
    </li>
</ul>
-->

          <!-- Profile Image -->
          <div class="box">
            <div class="box-body box-profile">
            
            <?php 
            $allergies = $this->db->where('child_id', $child->id)->get('child_allergy');
            $allergy_result = $allergies->result();
            if(!empty($allergy_result)){
            ?>
            <span class="input-group-btn">
                        <button type="submit" class="btn btn-blue">Allergy</button>
                      </span>
            <?php }?>
                      
             <?php $this->load->view('modules/child/childphoto'); ?>
<!--              <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="<?php echo base_url();?>/images/5.jpg" alt="User profile picture">-->

              <h3 class="profile-username text-center"><?php echo $child->first_name.' '.$child->last_name;?></h3>
              
              <p class="text-center"><a href="#" class="link" data-toggle="modal" data-target="#child-info"><i class="ion ion-card"></i> profile</a></p>

              <?php //<p class="text-muted text-center">Accoubts Manager Jindal Cop.</p>?>
				
              <div class="row social-states">
				  <div class="col-6 text-right"><a href="#" class="link"><i class="ion ion-ios-people-outline"></i> 254</a></div>
				  <div class="col-6 text-left"><a href="#" class="link"><i class="ion ion-images"></i> 54</a></div>
			  </div>
              
              <div class="row">
              	 <ul class="sidebar-menu1">
					<li class="list-group-item">
					<?php echo anchor('child/' . $child->id . '/health', '<i class="fa fa-medkit"></i><span>' . lang('health')."</span>"); ?>
					</li>
					<li class="list-group-item">
					<?php echo anchor('child/' . $child->id . '/notes', '<i class="fa fa-book"></i><span>' . lang('notes')); ?>
					</li>
					<li class="list-group-item">
					<?php echo anchor('child/' . $child->id . '/billing', '<i class="fa fa-credit-card"></i><span>' . lang('invoice')); ?>
					
					</li>
					<li class="list-group-item">
					<?php echo anchor('child/' . $child->id . '/attendance', '<i class="fa fa-clipboard"></i><span>' . lang('attendance')); ?>
					</li>
<!--
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
						<i class="fa fa-print"></i> <span>Invoice</span>
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
-->
              </div>
              
              <div class="row">
              	<div class="col-12">
              		<div class="profile-user-info">
              		<h3 style="padding-bottom: 10px;">Quick contact</h3>
						<p>Email address </p>
						<h6 class="margin-bottom">jhone.mical@yahoo.com</h6>
						<p>Phone</p>
						<h6 class="margin-bottom">+11 123 456 7890</h6> 
						<p>Address</p>
						<h6 class="margin-bottom">123, Lorem Ipsum, Florida, USA</h6>
						<div class="map-box">
<!--							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
						</div>
						<!--<p class="margin-bottom">Social Profile</p>
						<div class="user-social-acount">
							<button class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button>
							<button class="btn btn-circle btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button>
							<button class="btn btn-circle btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button>
						</div>-->
					</div>
             	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

 
          <!--<div class="box">
            <div class="box-body box-profile">
            <div class="row">
            	<div class="col-sm-12">
            		<a href="#" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            	</div>
            </div>
            <div class="row">
            	<div class="col-sm-8 chi_info">
              <!--<h3 class="profile-username text-center">Jhone Mical</h3>
              <p class="text-muted text-center">Accoubts Manager Jindal Cop.</p>
				
              <div class="row social-states">
				  <div class="col-6 text-right"><a href="#" class="link"><i class="ion ion-ios-people-outline"></i> 254</a></div>
				  <div class="col-6 text-left"><a href="#" class="link"><i class="ion ion-images"></i> 54</a></div>
			  </div>->
					  <p>First Name</p>
					  <p>Last Name</p>
					  <p>12/12/2012</p>
					  <p>1245</p>
					  <p>Male</p>
					  <p>Class</p>
					  <p>Status</p>
					  <p>Schedule</p>
					  <p>Note</p>
			  	</div>
            	<div class="col-sm-4">
              		<img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="<?php echo base_url();?>/images/5.jpg" alt="User profile picture">
			 	</div>
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
					<li class="<?php echo set_active('invoice'); ?>">
					  <a href="<?php echo site_url('invoice'); ?>">
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
						<!--<div class="map-box">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>->
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
          </div>-->
          
          
          
          
          
          
          
<div class="modal fade" id="child-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only"><?php echo lang('close'); ?></span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo lang('profile'); ?>
                    - <?php echo $child->last_name . ', ' . $child->first_name; ?></h4>
            </div>
            <div class="modal-body">
                <?php //$this->load->view('modules/child/info'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal"><?php echo lang('cancel'); ?></button>

            </div>
        </div>
    </div>
</div>
        
 