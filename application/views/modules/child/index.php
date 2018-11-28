<?php $this->load->view('modules/child/nav'); ?>
<div class="row">
    <div class="col-sm-3 col-lg-3 col-md-3 table-responsive">
        <?php $this->load->view('modules/child/sidebar'); ?>
    </div>
    <div class="col-sm-9 col-lg-9 col-md-9">
        <?php $this->load->view($this->module . 'dashboard'); ?>
    </div>
</div>