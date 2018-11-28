<!DOCTYPE html>
<html class="lockscreen">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->config->item('name', 'company'); ?></title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/master_style.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<!--
<body>
<div class="center">
    <?php if (!empty($this->session->flashdata('message'))) : ?>
        <div id="msg"
             class="msg alert alert-<?php echo $this->session->flashdata('type'); ?> alert-dismissable">
            <span class="fa fa-<?php echo $this->session->flashdata('icon'); ?>"></span>
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>
	<div class="headline text-center" id="time"></div>
	<div class="lockscreen-name">
		<?php echo strtoupper($this->user->user()->last_name); ?>
	</div>
	<div class="lockscreen-item">
		<div class="lockscreen-image">
			<?php echo $this->user->getPhoto(); ?>
		</div>
		<div class="lockscreen-credentials">
			<?php echo form_open('dashboard/login'); ?>
			<div class="input-group">
				<input type="password" class="form-control" name="pin" placeholder="pin" />
				<div class="input-group-btn">
					<button class="btn btn-flat"><i class="fa fa-arrow-right text-muted"></i></button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>

	<div class="lockscreen-link">
		<a class="lockscreen-name label label-success" href="<?php echo site_url('logout'); ?>">
            <?php echo lang('switch_user'); ?>
        </a>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        history.pushState(null, document.title, location.href);
        window.addEventListener('popstate', function (event)
        {
            history.pushState(null, document.title, location.href);
        });
    });
	$(function() {
		startTime();
		$(".center").center();
		$(window).resize(function() {
			$(".center").center();
		});
	});

	/*  */
	function startTime()
	{
		var today = new Date();
		var h = today.getHours();
		var m = today.getMinutes();
		var s = today.getSeconds();

		// add a zero in front of numbers<10
		m = checkTime(m);
		s = checkTime(s);

		//Check for PM and AM
		var day_or_night = (h > 11) ? "PM" : "AM";

		//Convert to 12 hours system
		if (h > 12)
			h -= 12;

		//Add time to the headline and update every 500 milliseconds
		$('#time').html(h + ":" + m + ":" + s + " " + day_or_night);
		setTimeout(function() {
			startTime()
		}, 500);
	}

	function checkTime(i)
	{
		if (i < 10)
		{
			i = "0" + i;
		}
		return i;
	}

	/* CENTER ELEMENTS IN THE SCREEN */
	jQuery.fn.center = function() {
		this.css("position", "absolute");
		this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
		$(window).scrollTop()) - 30 + "px");
		this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
		$(window).scrollLeft()) + "px");
		return this;
	}
</script>
</body>
-->

<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
	
	  <div class="lockscreen-logo">
		<a href="../../index.html"><b>Aries</b>Admin</a>
	  </div>
	  <div class="lockscreen-box-body">

	  <!-- START LOCK SCREEN ITEM -->
	  <div class="lockscreen-item">
		<!-- lockscreen image -->
		<div class="lockscreen-image">
		  <img src="<?php echo base_url(); ?>/images/user1-128x128.jpg" alt="User Image">
		</div>
		<!-- /.lockscreen-image -->	
    	
	    <!-- User name -->
	    <div class="lockscreen-name margin-top-20"><h3>Maical Doe</h3></div>
	    
		<!-- lockscreen credentials (contains the form) -->
		<form class="lockscreen-credentials form-element margin-top-20">
		  <div class="form-group has-feedback">
			<input type="password" class="form-control" placeholder="Password">
			<span class="ion ion-locked form-control-feedback "></span>
		  </div>
		  <!-- /.col -->
			<div class="text-center">
			  <button type="submit" class="btn btn-info btn-block margin-top-10">LOGIN</button>
			</div>
        <!-- /.col -->
		</form>
		<!-- /.lockscreen credentials -->

	  </div>
	  <!-- /.lockscreen-item -->
	  <div class="help-block text-center margin-top-20">
		Enter your password to retrieve your session
	  </div>
	  <div class="text-center">
		Or <a href="login.html"><b>Sign In</b></a> as a Different User
	  </div>
	</div>
</div>

	
	
</body>
</html>