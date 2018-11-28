<!--<div class="box box-solid box-info">
    <div class="box-header ui-sortable-handle">
        <i class="fa fa-calendar"></i>
        <h3 class="box-title"><?php echo lang('calendar'); ?></h3>
    </div>
    <!-- /.box-header ->
    <div class="box-body no-padding">
        <!--The calendar ->
        <div id="calendar"></div>
    </div>
    <!-- /.box-body ->
    <div class="box-footer text-black">

    </div>
</div>-->
<div class="row">
        <div class="col-lg-3 col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events" >
                <div class="external-event text-green dot-outline" data-class="bg-green"><i class="fa fa-hand-o-right"></i>Lunch</div>
                <div class="external-event text-yellow dot-outline" data-class="bg-yellow"><i class="fa fa-hand-o-right"></i>Go home</div>
                <div class="external-event text-aqua dot-outline" data-class="bg-aqua"><i class="fa fa-hand-o-right"></i>Do homework</div>
                <div class="external-event text-purple dot-outline" data-class="bg-purple"><i class="fa fa-hand-o-right"></i>Work on UI design</div>
                <div class="external-event text-red dot-outline" data-class="bg-red"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
              </div>
              <div class="event-fc-bt">
                <!-- checkbox -->
				<div class="checkbox margin-top-20">
					<input id="drop-remove" type="checkbox">
					<label for="drop-remove">
						Remove after drop
					</label>
				</div>
             	<!--<a href="#" data-toggle="modal" data-target="#add-new-events" class="btn btn-lg btn-success btn-block margin-top-10">
					<i class="ti-plus"></i> Add New Event
				</a>-->
             	<select name="add_event" id="add_event">
             		<option value=""></option>
             		<option value="1">Child</option>
             		<option value="2">Parent</option>
             		<option value="3">Child</option>
             		<option value="4">Parent</option>
             		<option value="5">Child</option>
             	</select>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-md-12">
          <div class="box">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      
      <div class="modal none-border" id="my-event">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><strong>Add Event</strong></h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
						<button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Add Category -->
		<div class="modal fade none-border" id="add-new-events">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><strong>Add</strong> a category</h4>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Category Name</label>
									<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
								</div>
								<div class="col-md-6">
									<label class="control-label">Choose Category Color</label>
									<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
										<option value="success">Success</option>
										<option value="danger">Danger</option>
										<option value="info">Info</option>
										<option value="primary">Primary</option>
										<option value="warning">Warning</option>
										<option value="inverse">Inverse</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
						<button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

<script type="text/javascript">
    $(function () {
        $('#calendar').fullCalendar({
            editable: false,
            selectable: false,
            eventLimit: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: {
                url: 'calendar/events'
            },
            //end click
            timeFormat: 'H(:mm)',
            eventClick: function (calEvent, jsEvent, view) {
                var start_d = calEvent.start.format("MM/DD/YYYY");
                var start_t = calEvent.start_t;
                var end_d = calEvent.end.format("MM/DD/YYYY");
                var end_t = calEvent.end_t;

                $('#view-event').modal('show');
                $('.modal-title').html(calEvent.title);
                $('.event-start-sm').html(start_d + ' ' + start_t);
                $('.event-end-sm').html(end_d + ' ' + end_t);
                $('.event-desc').html(calEvent.description);
                //edit event
                $('.edit-event-btn').click(function () {
                    $('#edit-event').modal('show');
                    $('#view-event').modal('hide');
                    $('input#event_id').val(calEvent.id);
                    $('input#event_title').val(calEvent.title);

                    //populate input fields (currently disabled)
//                    $('input#start_date').attr('type', 'text').val(start_d);
//                    $('input#end_date').attr('type', 'text').val(end_d);

                    $('input#start_time').attr('type', 'text').val(start_t);
                    $('input#end_time').attr('type', 'text').val(end_t);
                    $("#editor2").val(calEvent.description);
                });
                //delete event
                $('.trash-event-btn').click(function (e) {
                    e.preventDefault();
                    swal({
                        title: 'Please confirm',
                        text: 'You are about to delete an event...',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Yes, Do it!',
                        closeOnConfirm: false
                    }, function () {
                        swal('processing...');
                        $.ajax({
                            type: "POST",
                            url: 'calendar/deleteEvent',
                            data: 'event_id=' + calEvent.id,
                            success: function () {
                                window.location.href = 'calendar';
                            },
                            error: function () {
                                window.location.href = 'calendar';
                            }
                        });
                    });

                });
            }, eventRender: function () {
                $('.fc-header-left').find('.fc-button-prev').html('<span class="fa fa-caret-left"></span>');
                $('.fc-header-left').find('.fc-button-next').html('<span class="fa fa-caret-right"></span>');
            },
            //day click
            dayClick: function (date, jsEvent, view) {
                var modal = $('#new-event');
                var start_d = date.format("YYYY-MM-DD");
                var start_t = date.format("hh:mm");
                $('input#start_date').val(start_d);
                $('input#end_date').val(start_d);
                $('input#start_time').val(start_t);
                $('input#end_time').val(start_t);

                modal.modal('show');
            }
        });

    });

</script>
<script>
		$(document).ready(function() {
			$('#add_event').select2({
				  placeholder: "Add Event",
  				  allowClear: true
			});
		});
	</script>

<?php
$this->load->view('modules/calendar/view_event');
if (is('superadmin') || is('admin') || is('manager') || is('staff'))
    $this->load->view('modules/calendar/new_event');
if (is('superadmin') || is('admin') || is('manager') || is('staff'))
    $this->load->view('modules/calendar/edit_event');
?>