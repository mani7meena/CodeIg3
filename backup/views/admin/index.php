<div class="row">
    <div class="col-md-7 col-lg-7">
        <h3><?php echo lang('payment_methods'); ?></h3>
        <div class="row">
            <div class="col-sm-6">
                <?php echo form_open('settings/paymentMethods'); ?>
                <div class="input-group">
                    <input type="text" name="title" class="form-control" required/>
                    <span class="input-group-btn">
                <button class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo lang('add'); ?>
                </button>
            </span>
                </div>
                <?php echo form_close(); ?>

                    <table class="table table-bordered">
                    <?php foreach ($payMethods as $payMethod): ?>
                        <tr>
                            <td>
                                <?php echo $payMethod->title; ?>
                            </td>
                            <td>
                                <a class="delete" href="<?php echo site_url('settings/deletePaymentMethod/' . $payMethod->id); ?>">
                                    <i class="fa fa-trash-o text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
            </div>
        </div>

        <hr/>
        <?php $this->load->view($this->module . 'company_logo'); ?>
    </div>

    <div class="col-md-5 col-lg-5">
        <?php //echo lang('settings_notice'); ?>
        <hr/>
        
    </div>
</div>