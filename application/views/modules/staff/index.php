<!--
<div class="row">
    <div class="col-md-4 col-sm-6">
        <select class="list-limit label label-default form-control" name=limit>
            <option value=5 <?php echo list_selected(5); ?>>5 <?php echo lang('records'); ?></option>
            <option value=10 <?php echo list_selected(10); ?>>10 <?php echo lang('records'); ?></option>
            <option value=25 <?php echo list_selected(25); ?>>25 <?php echo lang('records'); ?></option>
            <option value=50 <?php echo list_selected(50); ?>>50 <?php echo lang('records'); ?></option>
        </select>
    </div>
    <div class="col-md-4 col-sm-6">
        <?php echo form_open('children', 'class="input-group"'); ?>
        <input type="text" name="search" class="form-control" placeholder="<?php echo lang('search'); ?>..."/>
        <span class="input-group-btn">
            <button class="btn btn-default">
                <span class="fa fa-search"></span>
			</button>
        </span>
        <?php echo form_close(); ?>

    </div>
    <div class="col-md-4 col-sm-6 text-right">
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#newChildModal">
            <span class="fa fa-plus"></span>
            <?php echo lang('register_child'); ?>
        </button>
        <a href="<?php echo site_url('children/roster'); ?>" target="_blank" class="btn btn-warning btn-flat">
            <span class="fa fa-print"></span>
            <?php echo lang('children_roster'); ?>
        </a>
    </div>
</div>


<?php
$page_name = $this->uri->segment(2);
if (!isset($_GET['limit'])) {
    $limit = 5;
} else {
    $limit = $_GET['limit'];
}
if (strlen($limit) > 0 and !is_numeric($limit)) {
    echo 'Data Error';
    exit;
}

if (!isset($_GET['start'])) {
    $start = 0;
} else {
    $start = $_GET['start'];
}
if (strlen($start) > 0 and !is_numeric($start)) {
    echo 'Data Error';
    exit;
}

//selected option
function list_selected($select)
{
    if (isset($_GET['limit'])) {
        $limit = $_GET['limit'];
    } else {
        $limit = '';
    }
    if ($limit == $select) {
        return 'selected';
    }
    return false;
}

//pagination limits
$eu = ($start - 0);

if (!$limit > 0) {
    $limit = 10; //default limit
}
$this1 = $eu + $limit;
$back = $eu - $limit;
$next = $eu + $limit;

if ($this->input->post('search')) {
    $this->db->like('last_name', $this->input->post('search'));
    $this->db->or_like('first_name', $this->input->post('search'));
}
$this->db->limit($limit, $eu);
$query = $this->db->get('children')->result();
?>-->

<!--
<div class="row">
    <?php if (!empty($query)) { ?>
        <?php foreach ($query

                       as $row): ?>
            <div class="col-sm-4 ">
				<div class="box box-body">
                <table class="table table-bordered">
                    <tr>
                        <td class="cursor" onclick="window.location.href='<?php echo site_url('child/' . $row->id); ?>'">
                            <?php
                            if ($row->photo !== "") {
                                echo '<img class=""
         src="' . base_url() . 'assets/uploads/users/children/' . $row->photo . '" style="width: 120px; height:120px"/>';
                            } else {
                                echo '<img class="img-circle"
         src="' . base_url() . 'assets/img/content/no-image.png" style="width: 120px; height:120px"/>';
                            }
                            ?>
                        </td>
                        <td>
                            <h4>
                                <a href="<?php echo site_url('/child/' . $row->id); ?>">
                                    <?php echo $row->last_name . ', ' . $row->first_name; ?>
                                </a>
                            </h4>
                            ID:
                            <?php echo decrypt($row->national_id); ?>
                            <br/>
                            <?php echo lang('birthday'); ?>:
                            <?php echo format_date($row->bday,false); ?> <br/>

                            <hr/>
                            <?php if ($this->child->is_checked_in($row->id) == 1) : ?>
                                <a id="<?php echo $row->id; ?>" href="#"
                                   class="btn btn-danger btn-flat btn-sm child-check-out">
                                    <span class="fa fa-new-window"></span>
                                    <?php echo lang('check_out'); ?>
                                </a>
                            <?php else : ?>
                                <a id="<?php echo $row->id; ?>" href="#"
                                   class="btn btn-primary btn-flat btn-sm child-check-in">
                                    <span class="fa fa-check"></span>
                                    <?php echo lang('check_in') . ' &nbsp; '; ?>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
				</div>
            </div>
        <?php endforeach; ?>
    <?php } else { ?>
        <a href="<?php echo site_url('children'); ?>" class="btn btn-primary"><i class="fa fa-chevron-left"></i> <?php echo lang('back'); ?></a>
        <hr/>
        <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle"></i> <?php echo lang('no_results_found'); ?></div>
    <?php } ?>
</div>
-->

<hr/>

<!--
<div class="row">
    <div class="col-sm-12 col-md-12 col-sm-12">
        <div class="btn-group">
            <?php
            //navigation
            if ($back >= 0) {
                echo '<a class="btn btn-default" href="' . $page_name . '?start=' . $back . '&limit=' . $limit . '">&laquo;</a>';
            } else {
                echo '<button disabled class="btn btn-default">&laquo;</button>';
            }
            $i = 0;
            $l = 1;
            for ($i = 0; $i < $this->child->getCount(); $i = $i + $limit) {
                if ($i <> $eu) {
                    echo '<a class="btn btn-default" href="' . $page_name . '?start=' . $i . '&limit=' . $limit . '">' . $l . '</a>';
                } else {
                    echo '<button class="btn btn-danger">' . $l . '</button>';
                }
                $l = $l + 1;
            }

            if ($this1 < $this->child->getCount()) {
                echo '<a class="btn btn-default" href="' . $page_name . '?start=' . $next . '&limit=' . $limit . '">&raquo;</a>';
            } else {
                echo '<button disabled class="btn btn-default">&raquo;</button>';
            }
            ?>
        </div>
    </div>
</div>
-->

<!--<div class="my_modal"></div>-->

<!--<?php $this->load->view('modules/children/register'); ?>

<script type="text/javascript">
    $('.list-limit').change(function () {
        var limit = $(this).val();
        window.location.href = '<?php echo $page_name; ?>?limit=' + limit;
    });
    $('.child-check-in').click(function () {
        var child_id = $(this).attr('id');
        $('.my_modal').load('<?php echo site_url('child'); ?>/' + child_id + '/checkIn').modal();
    });
    $('.child-check-out').click(function () {
        var child_id = $(this).attr('id');
        $('.my_modal').load('<?php echo site_url('child'); ?>/' + child_id + '/checkOut').modal();
    });

</script>-->

<div class="row">
	<?php if (!empty($query)) { ?>
		<?php foreach ($query
	    	as $row){ ?>
          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox" checked>
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="text-center pt-5 col-sm-12">
                <a href="<?php echo site_url('/child/' . $row->id); ?>">
                  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/1.jpg">
                </a>
              </div>
              <div class="col-sm-12 child_info">
              	<h5 class="mt-15 mb-0"><a href="<?php echo site_url('/child/' . $row->id); ?>">Maryam Amiri</a></h5>
                <table>
					<tr>
						<td>Pin No</td>
						<td>:</td>
						<td>12345</td>
					</tr>
					<tr>
						<td>Date Of Birth</td>
						<td>:</td>
						<td>12/03/2018</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>:</td>
						<td>Female</td>
					</tr>
					<tr>
						<td>Class</td>
						<td>:</td>
						<td>1<sup>st</sup></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>:</td>
						<td>1234567890</td>
					</tr>
				</table>
				
              </div>
              </div>
            </div>
          </div>
	<?php
					}
	}
	
 	?>

<?php if (!empty($query)) { ?>
		<?php foreach ($query
	    	as $row){ ?>
          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox">
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
				  <div class="text-center pt-5 col-sm-12">
					<a href="<?php echo site_url('/child/' . $row->id); ?>">
					  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/2.jpg">
					</a>
				  </div>
				  <div class="col-sm-12 child_info">
					<h5 class="mt-15 mb-0"><a  href="<?php echo site_url('/child/' . $row->id); ?>">Hossein Shams</a></h5>
					<table>
						<tr>
							<td>Pin No</td>
							<td>:</td>
							<td>12345</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>
							<td>:</td>
							<td>12/03/2018</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>Female</td>
						</tr>
						<tr>
							<td>Class</td>
							<td>:</td>
							<td>1<sup>st</sup></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td>1234567890</td>
						</tr>
					</table>
					
				  </div>
              </div>
            </div>
          </div>
<?php
					}
	}
	
 	?>


          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox">
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
				  <div class="text-center pt-5 col-sm-12">
					<a href="<?php echo site_url('/child/' . $row->id); ?>">
					  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/3.jpg">
					</a>
				  </div>
				  <div class="col-sm-12 child_info">
					<h5 class="mt-15 mb-0"><a href="<?php echo site_url('/child/' . $row->id); ?>">Sarah Conner</a></h5>
					<table>
						<tr>
							<td>Pin No</td>
							<td>:</td>
							<td>12345</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>
							<td>:</td>
							<td>12/03/2018</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>Female</td>
						</tr>
						<tr>
							<td>Class</td>
							<td>:</td>
							<td>1<sup>st</sup></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td>1234567890</td>
						</tr>
					</table>
					
				  </div>
              </div>
            </div>
          </div>



          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox">
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
				  <div class="text-center pt-5 col-sm-12">
					<a href="<?php echo site_url('/child/' . $row->id); ?>">
					  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/4.jpg">
					</a>
				  </div>
				  <div class="col-sm-12 child_info">
					<h5 class="mt-15 mb-0"><a href="<?php echo site_url('/child/' . $row->id); ?>">Frank Camly</a></h5>
					<table>
						<tr>
							<td>Pin No</td>
							<td>:</td>
							<td>12345</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>
							<td>:</td>
							<td>12/03/2018</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>Female</td>
						</tr>
						<tr>
							<td>Class</td>
							<td>:</td>
							<td>1<sup>st</sup></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td>1234567890</td>
						</tr>
					</table>
					
				  </div>
              </div>
            </div>
          </div>



          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox">
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
				  <div class="text-center pt-5 col-sm-12">
					<a href="<?php echo site_url('/child/' . $row->id); ?>">
					  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/5.jpg">
					</a>
				  </div>
				  <div class="col-sm-12 child_info">
					<h5 class="mt-15 mb-0"><a href="<?php echo site_url('/child/' . $row->id); ?>">Freddie Arendes</a></h5>
					<table>
						<tr>
							<td>Pin No</td>
							<td>:</td>
							<td>12345</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>
							<td>:</td>
							<td>12/03/2018</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>Female</td>
						</tr>
						<tr>
							<td>Class</td>
							<td>:</td>
							<td>1<sup>st</sup></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td>1234567890</td>
						</tr>
					</table>
					
				  </div>
            	</div>
          	</div>
          </div>



          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox" checked>
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
				  <div class="text-center pt-5 col-sm-12">
					<a href="<?php echo site_url('/child/' . $row->id); ?>">
					  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/6.jpg">
					</a>
				  </div>
				  <div class="col-sm-12 child_info">
					<h5 class="mt-15 mb-0"><a href="<?php echo site_url('/child/' . $row->id); ?>">Gary Camara</a></h5>
					<table>
						<tr>
							<td>Pin No</td>
							<td>:</td>
							<td>12345</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>
							<td>:</td>
							<td>12/03/2018</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>Female</td>
						</tr>
						<tr>
							<td>Class</td>
							<td>:</td>
							<td>1<sup>st</sup></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td>1234567890</td>
						</tr>
					</table>
					
				  </div>
            	</div>
            </div>
          </div>



          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox">
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
				  <div class="text-center pt-5 col-sm-12">
					<a href="<?php echo site_url('/child/' . $row->id); ?>">
					  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/7.jpg">
					</a>
				  </div>
				  <div class="col-sm-12 child_info">
				  	<h5 class="mt-15 mb-0"><a href="<?php echo site_url('/child/' . $row->id); ?>">Fidel Tonn</a></h5>
					<table>
						<tr>
							<td>Pin No</td>
							<td>:</td>
							<td>12345</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>
							<td>:</td>
							<td>12/03/2018</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>Female</td>
						</tr>
						<tr>
							<td>Class</td>
							<td>:</td>
							<td>1<sup>st</sup></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td>1234567890</td>
						</tr>
					</table>
					
				  </div>
            	</div>
          	</div>
          </div>



          <div class="col-6 col-md-6 col-lg-4 col-xl-3">
            <div class="box box-body">
              <div class="flexbox align-items-center">
                <label class="toggler toggler-yellow">
                  <input type="checkbox" checked>
                  <i class="fa fa-star"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ion-android-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="row">
				  <div class="text-center pt-5 col-sm-12">
					<a href="<?php echo site_url('/child/' . $row->id); ?>">
					  <img class="avatar avatar-xxl avatar-xxxl" src="<?php echo base_url(); ?>/images/avatar/8.jpg">
					</a>
				  </div>
				  <div class="col-sm-12 child_info">
					<h5 class="mt-15 mb-0"><a href="<?php echo site_url('/child/' . $row->id); ?>">Fidel Tonn</a></h5>
					<table>
						<tr>
							<td>Pin No</td>
							<td>:</td>
							<td>12345</td>
						</tr>
						<tr>
							<td>Date Of Birth</td>
							<td>:</td>
							<td>12/03/2018</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>Female</td>
						</tr>
						<tr>
							<td>Class</td>
							<td>:</td>
							<td>1<sup>st</sup></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:</td>
							<td>1234567890</td>
						</tr>
					</table>
					
				  </div>
            	</div>
            </div>
          </div>
        </div>
		
<nav>
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#">
                <span class="ion-ios-arrow-thin-left"></span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                <span class="ion-ios-arrow-thin-right"></span>
              </a>
            </li>
          </ul>
        </nav>
        
        
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>