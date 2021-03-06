<?php $this->load->view('modules/child/childphoto'); ?>
<ul class="list-group" style="margin-top:5px;">
    <li class="list-group-item text-left"><?php echo anchor('child/' . $child->id, '<i class="fa fa-home"></i>' . lang('dashboard'), 'class=" bg-orange"'); ?></li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/health', '<i class="fa fa-medkit"></i>' . lang('health'), 'class="bg-yellow"'); ?>
    </li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/notes', '<i class="fa fa-book"></i>' . lang('notes'), 'class="bg-blue"'); ?>
    </li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/billing', '<i class="fa fa-credit-card"></i>' . lang('billing'), 'class="bg-black"'); ?>
    </li>
    <li class="list-group-item">
        <?php echo anchor('child/' . $child->id . '/attendance', '<i class="fa fa-clipboard"></i>' . lang('attendance'), 'class="bg-purple"'); ?>
    </li>
</ul>