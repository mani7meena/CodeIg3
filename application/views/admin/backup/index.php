<div class="row">
	<div class="col-lg-12">
		<div class="box box-solid box-primary">
			<div class="box-header"><h3 class="box-title"><?php echo lang('reports'); ?></h3></div>
			<div class="box-body">
				
				<div class="table-responsive">
				<h3><?php echo lang('database') . ' ' . lang('backup'); ?></h3>
				<table class="table table-bordered table-hover table-striped table-condensed">
				<thead>
				<tr>
				    <th>#</th>
				    <th>Child Name</th>
				    <th>date checkin</th>
				    <th>Dropby</th>
				    <th>date check out</th>
				    <th>pickup by</th>
				     
				    <th></th>
				</tr>
				</thead>
				<tbody>
				<?php $i=0; foreach ($checkinout->result_array() as $one) { ?>
				    <tr>
				        <td> <?php  echo ++$i;?></td>
				        <th><?php echo $one['first_name']." ".$one['last_name']  ?></th>
				        <td>
				            <?php echo $one['time_in']  ?>
				        </td>
				        <td> <?php echo $one['in_guardian'] ?></td>
				        <td> <?php echo $one['time_out'] ?></td>
				        <td><?php echo $one['out_guardian'] ?></td>
				         <td></td>
				    </tr>
				<?php  } ?>
				</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="box box-solid box-primary">
			<div class="box-header"><h3 class="box-title"><?php echo lang('reports'); ?></h3></div>
			<div class="box-body">
				
				<div class="table-responsive">
				<h3><?php echo  'Food ' . lang('backup'); ?></h3>
				<table class="table table-bordered table-hover table-striped table-condensed">
				<thead>
				<tr>
				    <th>#</th>
				    <th>Child Name</th>
				    <th>Food</th>
				    <th>Food time</th>
				    <th>Comment</th>
				   
				     
				    <th></th>
				</tr>
				</thead>
				<tbody>
				<?php $i=0; foreach ($food_reports->result_array() as $one) { ?>
				    <tr>
				        <td> <?php  echo ++$i;?></td>
				        <th><?php echo $one['first_name']." ".$one['last_name']  ?></th>
				        <td>
				            <?php echo $one['food']  ?>
				        </td>
				        <td> <?php echo $one['food_time'] ?></td>
				        <td> <?php echo $one['comment'] ?></td>
				     
				         <td></td>
				    </tr>
				<?php  } ?>
				</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!--<div class="row">
	<div class="col-lg-6">
		<div class="box box-solid box-primary">
			<div class="box-header"><h3 class="box-title"><?php //echo lang('reports'); ?></h3></div>
			<div class="box-body">
				<?php //$this->load->view($this->module . 'view_backup_list'); ?>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="box box-solid box-primary">
			<div class="box-header"><h3 class="box-title"><?php //echo lang('reports'); ?></h3></div>
			<div class="box-body">
				<?php //$this->load->view($this->module . 'generate_csv'); ?>
			</div>
		</div>
	</div>
</div>-->

<script type="text/javascript">

    $(document).ready(function () {
        $('.del_sql').click(function () {
            if(confirm('<?php echo lang('confirm_delete_item'); ?>')){
                var id = $(this).attr('id');
                window.location.href = '<?php echo site_url('reports/delete_sql_backup'); ?>/' + id;
            }
        });
        $('.del_csv').click(function () {
            if(confirm('<?php echo lang('confirm_delete_item'); ?>')){
                var id = $(this).attr('id');
                window.location.href = '<?php echo site_url('reports/delete_csv_backup'); ?>/' + id;
            }
        });
    });
</script>