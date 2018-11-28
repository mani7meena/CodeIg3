<div class="box box-solid box-info">
    <div class="box-header ui-sortable-handle">
        <i class="fa fa-calendar"></i>
        <h3 class="box-title"><?php echo lang('nutrition'); ?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <!--The calendar -->
        <div id="calendar"></div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-black">

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
                url: 'nutrition/foods'
            },
            //end click
            timeFormat: 'H(:mm)',
            eventClick: function (calEvent, jsEvent, view) {
                var start_d = calEvent.start.format("MM/DD/YYYY");
                var start_t = calEvent.start_t;
                var end_d = calEvent.end.format("MM/DD/YYYY");
                var end_t = calEvent.end_t;

                $('#view-food').modal('show');
                $('.modal-title').html(calEvent.title);
                $('.event-start-sm').html(start_d + ' ' + start_t);
                $('.event-end-sm').html(end_d + ' ' + end_t);
                $('.event-desc').html(calEvent.description);
                //edit event
                $('.edit-event-btn').click(function () {
                    $('#edit-food').modal('show');
                    $('#view-food').modal('hide');
                    $('input#food_id').val(calEvent.id);
                    $('input#food_title').val(calEvent.title);

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
                        text: 'You are about to delete food...',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Yes, Do it!',
                        closeOnConfirm: false
                    }, function () {
                        swal('processing...');
                        $.ajax({
                            type: "POST",
                            url: 'nutrition/deleteFood',
                            data: 'food_id=' + calEvent.id,
                            success: function () {
                                window.location.href = 'nutrition';
                            },
                            error: function () {
                                window.location.href = 'nutrition';
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
                var modal = $('#new-food');
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

<?php
$this->load->view('modules/nutrition/view_food');
if (is('superadmin') || is('admin') || is('manager') || is('staff'))
    $this->load->view('modules/nutrition/new_food');
if (is('superadmin') || is('admin') || is('manager') || is('staff'))
    $this->load->view('modules/nutrition/edit_food');
?>