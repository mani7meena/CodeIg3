<div class="col-12 ">
<div class="row">
          	<div class="box">
              <div class="row no-gutters py-2">

                <div class="col-sm-6 col-lg-3">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-person font-size-26"></i><br>
                        <?php echo lang('children'); ?>
                      </span>
                      <span class="text-primary font-size-40"><?php echo $this->child->getCount(); ?></span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 hidden-down">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-document font-size-26"></i><br>
                        <?php echo lang('users'); ?>
                      </span>
                      <span class="text-info font-size-40"> <?php echo $this->user->getCount(); ?></span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-information font-size-26"></i><br>
                         <?php echo lang('invoices'); ?>
                      </span>
                      <span class="text-warning font-size-40"><?php
                            echo $this->db->select('id')->get('invoices')->num_rows();
                            ?></span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                  <div class="box-body">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-folder font-size-26"></i><br>
                        <?php echo lang('articles'); ?>
                      </span>
                      <span class="text-danger font-size-40"><?php
                            echo $this->db->select('id')->get('news')->num_rows();
                            ?></span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
        </div>
</div>
<div class="clearfix"></div>
<div class="col-xs-12">
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-4">
    	
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
					<canvas class="mr-40 text-top" id="icon1" width="128" height="128"></canvas>
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
       
         <div class="box">
				<div class="box-header with-border">
              		<h5 class="box-title">My Details</h5>
				</div>
				<div class="box-body p-0">
				  <div class="media-list media-list-hover media-list-divided">
                  	<?php
					if(!empty($this->config->item('name', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-primary"><i class="fa fa-user"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('name', 'company'); ?></p>
					  </div>
					</a>
					<?php
					}if(!empty($this->config->item('slogan', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-success"><i class="fa fa-usd"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('slogan', 'company'); ?></p>
					  </div>
					</a>
                    <?php
					}if(!empty($this->config->item('timezone', 'company'))){
					?>
                    <a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-yellow"><i class="fa fa-star"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('timezone', 'company'); ?></p>
					  </div>
					</a>
                    <?php
					}if(!empty($this->config->item('email', 'company'))){
					?>
                    <a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-primary"><i class="fa fa-user"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('email', 'company'); ?></p>
					  </div>
					</a>
<?php
					}if(!empty($this->config->item('phone', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-success"><i class="fa fa-usd"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('phone', 'company'); ?></p>
					  </div>
					</a>
<?php
					}if(!empty($this->config->item('fax', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-danger"><i class="fa fa-area-chart"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('fax', 'company'); ?></p>
					  </div>
					</a>
<?php
					}if(!empty($this->config->item('street', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-danger"><i class="fa fa-area-chart"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('street', 'company'); ?></p>
					  </div>
					</a>
                    
<?php
					}if(!empty($this->config->item('city', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-yellow"><i class="fa fa-star"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('city', 'company'); ?></p>
					  </div>
					</a>
                    <?php
					}if(!empty($this->config->item('state', 'company'))){
					?>
                    <a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-primary"><i class="fa fa-user"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('state', 'company'); ?></p>
					  </div>
					</a>
<?php
					}if(!empty($this->config->item('postal_code', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-success"><i class="fa fa-usd"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('postal_code', 'company'); ?></p>
					  </div>
					</a>
<?php
					}if(!empty($this->config->item('country', 'company'))){
					?>
					<a class="media media-single" href="#">
					  <span class="avatar avatar-sm bg-danger"><i class="fa fa-area-chart"></i></span>
					  <div class="media-body">
						<p><?php echo $this->config->item('country', 'company'); ?></p>
					  </div>
					</a>
<?php
					}
?>
					
				  </div>
				</div>
            </div>
            
     <div class="box">
              <div class="box-body">
                <div class="flexbox">
                  <h5><?php echo lang('invoices_due'); ?></h5>
                 
                </div>

                <div class="text-center my-2">
                  <div class="font-size-60 text-info"><?php echo $this->db->where('invoice_status', 2)->get('invoices')->num_rows(); ?></div>
                  <span class="text-muted"><?php echo lang('total'); ?></span>
                </div>
              </div>

              <div class="card-body bg-gray-light py-12">
                <span class="text-muted mr-1">Amount:</span>
                <span class="text-dark"><?php echo $this->config->item('currency_symbol') . $this->invoice->getTotalDue(); ?></span>
              </div>

              <div class="progress progress-xxs mt-0 mb-0">
                <div class="progress-bar bg-info" role="progressbar" style="width: 45%; height: 3px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


        <div class="small-box bg-blue">
            <div class="inner">
              <h3>Children <br> Roster</h3>

            </div>
            <div class="icon">
              <i class="fa fa-shopping-bag"></i>
            </div>
             <?php echo anchor('children/roster', '<i class="fa fa-file-pdf-o"></i>  More info', 'target="_blank" class="small-box-footer"'); ?>
           
          </div>
          
       
    </div>


    <div class="col-lg-9 col-md-8 col-sm-8">
        

        <div class=" hidden-xs">
            <section class="col-sm-12 connectedSortable">
                <?php $this->load->view('modules/calendar/widget'); ?>
            </section>
        </div>
    </div>
</div>
</div>
