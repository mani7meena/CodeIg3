<div class="alert alert-danger">
   <?php echo lang('admin_purge_warning'); ?>
</div>
<?php
if (!isset($_POST['confirm'])) { //double check this is the action
    echo form_open();
    ?>
    <div class="input-group">
        <input type="text" name="confirm" class="form-control"/>
    <span class="input-group-btn">
        <button class="btn btn-danger"><?php echo lang('purge'); ?>!</button>
    </span>
    </div>
    <?php
    echo form_close();
} else {
    if ($_POST['confirm'] == "PURGE") {

        $this->db->where('id', $this->my_child->getChildId());

        if ($this->db->delete('children') > 0) {

            flash('success',lang('request_success'));
        } else {

            flash('danger', lang('request_error'));
        }
    }
    redirect('children');
}