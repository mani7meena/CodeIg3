<div class="row">
        <div class="col-lg-3 col-12">
          <a href="<?php echo site_url('mail/compose'); ?>" class="btn btn-success btn-block btn-shadow margin-bottom">Compose</a>

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding mailbox-nav">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i class="ion ion-ios-email-outline"></i> Inbox
                  <span class="label label-success pull-right">12</span></a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-paper-airplane"></i> Sent</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Drafts</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right">14</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-trash-a"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding mailbox-nav">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-trash-a"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <div class="btn-group">
				  <div class="btn-group">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				      <i class="ion ion-flag margin-r-5"></i>
					  <span class="caret"></span>
					</button>
					<div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				  </div>
				  <div class="btn-group">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				  	  <i class="ion ion-folder margin-r-5"></i>
					  <span class="caret"></span>
					</button>
					<div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				  </div>
				</div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="mailbox-messages">
                <table class="table table-hover table-striped table-responsive">
                  <tbody>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Hritik Roshan</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">3 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">Genelia Roshan</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">14 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">Ritesh Deshmukh</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">15 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Akshay Kumar</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">25 hours ago</td>
                  </tr>
                 <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Salman Dada</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">3 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">Rucha Gandhi</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">14 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">Patil Bhw</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">15 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Tapan Jio</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">25 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Milin Khan</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">3 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">Kajal SEO</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">14 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">Ruchit Khhana</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">15 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Manoj Kumar</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">25 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Akshar Gandhi</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">3 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">vipul Patel</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">14 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailbox-name">Amitabh Boss</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">15 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name">Rajni Ana</td>
                    <td class="mailbox-subject"><a href="read-mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">25 hours ago</td>
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-trash-a"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="ion ion-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <div class="btn-group">
				  <div class="btn-group">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				      <i class="ion ion-flag margin-r-5"></i>
					  <span class="caret"></span>
					</button>
					<div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				  </div>
				  <div class="btn-group">
					<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				  	  <i class="ion ion-folder margin-r-5"></i>
					  <span class="caret"></span>
					</button>
					<div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				  </div>
				</div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>