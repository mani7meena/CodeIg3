<?php
if ($this->ion_auth->logged_in()) {
    redirect('dashboard', 'refresh');
}

$identity = array(
    'name' => 'identity',
    'id' => 'identity',
    'type' => 'text',
    'value' => '',
    'class' => 'form-control form-control-danger',
    'placeholder' => lang('enter_email'),
    'required' => 'required'
);
$password = array(
    'name' => 'password',
    'id' => 'password',
    'type' => 'password',
    'class' => 'form-control form-control-danger',
    'placeholder' => lang('password'),
    'required' => 'required'
);
?>
<div id="app" class="login-wrapper">
	<div class="login-box">
  <div class="login-logo">
     <a href="<?php echo site_url(); ?>">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $this->config->item('logo', 'company'); ?>"
             alt="Laraspace Logo">
    </a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
 <form action="<?php echo site_url('auth/login'); ?>" id="loginForm" class="form-element" method="post" autocomplete="off">
      <div class="form-group has-feedback">
      	<?php echo form_input($data['email']); ?>
       <!-- <input type="email" class="form-control" placeholder="Email">-->
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      	<?php echo form_input($data['password']); ?>
        <!--<input type="password" class="form-control" placeholder="Password">-->
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        
        <div class="col-12">
         <div class="fog-pwd">
         	 <?php echo anchor('password/forgot', '<i class="ion ion-locked"></i> ' . lang('forgot_password_heading')); ?>
          	
          </div>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
        </div>
      </div>
    </form>

   <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
    </div>-->

    <div class="margin-top-30 text-center">
    	<p>Don't have an account?
    	 <?php if(config_item('allow_registration')==TRUE): ?>
                    
                <?php echo anchor('register', '<span class="fa fa-user"></span> ' . lang('register')); ?>
                <?php endif; ?>
    	</p>
    </div>

  </div>
</div>
    <!--<div class="login-box  animation flipInX">
        <div class="logo-main">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo base_url(); ?>assets/img/<?php echo $this->config->item('logo', 'company'); ?>"
                     alt="Laraspace Logo">
            </a>
        </div>

        <form action="<?php echo site_url('auth/login'); ?>" id="loginForm" method="post">
            <div class="form-group">
                <?php echo form_input($data['email']); ?>
            </div>
            <div class="form-group">
                <?php echo form_input($data['password']); ?>
            </div>

            <?php if (config_item('enable_captcha')): ?>
                <div class="form-group">
                    <?php echo $data['captcha_image']; ?>
                    <?php echo form_input($data['captcha']); ?>
                </div>
            <?php endif; ?>

            <button class="btn btn-theme btn-full"><?php echo lang('login'); ?></button>
            <div class="other-actions" style="text-align:center">

                <?php echo anchor('password/forgot', '<span class="fa fa-key"></span> ' . lang('forgot_password_heading')); ?>

                <?php if(config_item('allow_registration')==TRUE): ?>
                    <br/>
                    <br/>
                <?php echo anchor('register', '<span class="fa fa-user"></span> ' . lang('register')); ?>
                <?php endif; ?>
            </div>
        </form>
        <div class="page-copyright">
            <p><?php echo lang('copyright'); ?></p>
        </div>
    </div>-->
</div>