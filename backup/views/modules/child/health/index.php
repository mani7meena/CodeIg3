<?php $this->load->view('modules/child/nav'); ?>
<div class="row">
    <div class="col-sm-2 col-lg-2 col-md-2 table-responsive">
        <?php $this->load->view('modules/child/sidebar'); ?>
    </div>
    <div class="col-sm-10 col-lg-10 col-md-10">
        <span class="h3"><i class="fa fa-th"></i> <?php echo lang('contacts'); ?></span>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#meds" data-toggle="tab">
                        <i class="fa fa-medkit"></i>
                        <?php echo lang('medications'); ?>
                    </a>
                </li>
                <li>
                    <a href="#allergies" data-toggle="tab">
                        <i class="fa fa-heart-o"></i>
                        <?php echo lang('allergies'); ?>
                    </a>
                </li>
                <li class="">
                    <a href="#food" data-toggle="tab">
                        <i class="fa fa-leaf"></i>
                        <?php echo lang('food_pref_header'); ?>
                    </a>
                </li>
                <li class="">
                    <a href="#emergency_contacts" data-toggle="tab">
                        <i class="fa fa-ambulance"></i> <?php echo lang('emergency_contacts'); ?>
                    </a>
                </li>
                <li class="">
                    <a href="#providers" data-toggle="tab">
                        <i class="fa fa-medkit"></i> <?php echo lang('healthcare_providers'); ?>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="meds">
                    <?php $this->load->view('modules/child/health/meds'); ?>
                </div>
                <div class="tab-pane" id="allergies">
                    <?php $this->load->view('modules/child/health/allergies', ['child' => $child]); ?>
                </div>
                <div class="tab-pane" id="food">
                    <?php $this->load->view('modules/child/health/food'); ?>
                </div>
                <div class="tab-pane" id="emergency_contacts">
                    <?php $this->load->view('modules/child/health/contacts'); ?>
                </div>
                <div class="tab-pane" id="providers">
                    <?php $this->load->view('modules/child/health/providers'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
