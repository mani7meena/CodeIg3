
<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/chart-js/chart.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js" type="text/javascript"></script>
	
	<script src="<?php echo base_url(); ?>assets/vendor_components/moment/min/moment.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/fastclick/lib/fastclick.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery.peity/jquery.peity.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/aries/template.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/aries/pages/dashboard.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/aries/demo.js" type="text/javascript"></script>
	
	
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/sweetalert2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor_components/ckeditor/ckeditor.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

<!-- Aries_admin for editor -->
	<script src="<?php echo base_url(); ?>assets/js/editor.js"></script>

<script src="<?php echo base_url(); ?>assets/js/global.js" type="text/javascript"></script>

<script type="text/javascript">

    $('.lock-screen').click(function () {
        location.href = "<?php echo site_url('lockscreen'); ?>";
    });
    setTimeout(function () {
        location.href = "<?php echo site_url('lockscreen'); ?>";
    }, 1800000);

    function confirmDelete(loc) {
        swal({
            title: '<?php echo lang('confirm_delete_title'); ?>',
            text: '<?php echo lang('confirm_delete_warning'); ?>',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: '<?php echo lang('confirm_delete_btn'); ?>',
            closeOnConfirm: false,
            backdrop:false,
            allowOutsideClick:false
        }, function () {
            swal('processing...');
            if (loc != undefined)
                window.location.href = loc;
        });
        e.preventDefault();
    }

    $('.delete').click(function (e) {
        var loc = $(this).attr('href');
        swal({
            title: '<?php echo lang('confirm_delete_title'); ?>',
            text: '<?php echo lang('confirm_delete_warning'); ?>',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: '<?php echo lang('confirm_delete_btn'); ?>',
            closeOnConfirm: false,
            backdrop:false,
            allowOutsideClick:false
        }, function () {
            swal('processing...');
            if (loc != undefined)
                window.location.href = loc;
        });
        e.preventDefault();
    });
</script>
</div>
</body>
</html>
