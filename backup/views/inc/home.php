<?php $this->load->view('inc/header'); ?>
<header class="main-header">
    <a href="<?php echo site_url('dashboard'); ?>" class="logo" style="left:0px !important;">
        <?php if ($this->config->item('logo', 'company') == "") : ?>
            <span class="" style="position: absolute; top:-7px; left:45px; z-index: 3000">
			<?php echo $this->config->item('name', 'company'); ?>
				</span>
            <span class="" style="position: absolute; top:13px; left:50px;
			z-index: 3000; font-size: 12px; color: #ffff00; font-family: monospace">
			<?php echo $this->config->item('slogan', 'company'); ?>
			</span>
        <?php else : ?>
            <img src="<?php echo base_url() . 'assets/img/' . $this->config->item('logo', 'company'); ?>"/>
        <?php endif; ?>
    </a>
    <?php $this->load->view('inc/nav'); ?>
</header>

    <?php $this->load->view('inc/sidebar'); ?>
    <div class="content-wrapper">
        <?php if ($this->uri->segment(1) !== 'child' && $this->uri->segment(1) !== 'invoice') : ?>
        
        	<section class="content-header">
              <h1>
               <?php echo strtoupper($this->uri->segment(1)); ?>
              </h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> <?php echo lang('home'); ?></a></li>
                <li class="breadcrumb-item active"><?php echo ucwords($this->uri->segment(1)); ?></li>
              </ol>
            </section>
            
            
        <?php endif; ?>
        <!-- Main content -->
        <section class="content">
            <?php if ($this->session->flashdata('message') !=="") : ?>
                <div id="msg"
                     class="msg alert alert-<?php echo $this->session->flashdata('type'); ?> alert-dismissable">
                    <span class="fa fa-<?php echo $this->session->flashdata('icon'); ?>"></span>
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
            <?php endif; ?>

            <?php $this->load->view($page); ?>
        </section>

    </div>


<?php $this->load->view('inc/footer'); ?>