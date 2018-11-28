<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->config->item('name', 'company'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/css/open-iconic-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/sweetalert.css" rel="stylesheet" type="text/css"/>


    <link href="<?php echo base_url(); ?>assets/css/master_style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/skins/_all-skins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/vendor_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/vendor_components/weather-icons/weather-icons.css" rel="stylesheet" type="text/css"/>
	
	
	<link href="<?php echo base_url(); ?>assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print'/>
	<link href="<?php echo base_url(); ?>assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
   
   <link href="<?php echo base_url(); ?>assets/vendor_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
   
   
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', '<?php echo $this->config->item('google_analytics', 'company'); ?>', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">