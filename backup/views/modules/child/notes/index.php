<?php $this->load->view('modules/child/nav'); ?>
    <div class="row">
        <div class="col-sm-2 col-lg-2 col-md-2 table-responsive">
            <?php $this->load->view('modules/child/sidebar'); ?>
        </div>
        <div class="col-sm-10 col-lg-10 col-md-10">
            <h2><?php echo lang('notes'); ?></h2>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#notes" aria-controls="home" role="tab" data-toggle="tab">
                        <i class="fa fa-clipboard"></i>
                        <?php echo lang('notes'); ?>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#incidents" aria-controls="incidents" role="tab" data-toggle="tab">
                        <i class="fa fa-exclamation-triangle text-warning"></i>
                        <?php echo lang('incident_reports'); ?>
                    </a>
                </li>
                <?php if (isset($_GET['viewNote']) || isset($_GET['viewIncident'])): ?>
                    <li role="presentation">
                        <a href="#view-notes" aria-controls="view-notes" role="tab" data-toggle="tab">
                            <i class="fa fa-eye"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (!is('parent')): ?>
                    <li class="pull-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newNoteModal">
                            <i class="fa fa-plus"></i> <?php echo lang('new_note'); ?>
                        </button>

                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#newIncidentModal">
                            <i class="fa fa-plus"></i> <?php echo lang('incident_report'); ?>
                        </button>
                    </li>
                <?php endif; ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="notes">
                    <br/>
                    <?php foreach ($notes as $note): ?>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <div class="box-title">
                                    <em class="text-olive small">
                                        <?php echo format_date($note->created_at); ?>

                                        <?php echo lang('by'); ?>
                                        <?php echo $this->user->user($note->user_id)->first_name; ?>
                                        <?php echo $this->user->user($note->user_id)->last_name; ?>
                                    </em>
                                    <br/>
                                    <a style="color: #1974cc;"
                                       href="?viewNote=<?php echo $note->id; ?>#view-notes"><?php echo $note->title; ?></a sty>
                                </div>
                                <?php if (!is('parent')): ?>
                                    <a class="pull-right delete "
                                       href="<?php echo site_url('child/deleteNote/' . $note->id); ?>">
                                        <i class="fa fa-trash-o text-danger"></i></a>
                                <?php endif; ?>
                            </div>
                            <div class="box-body">

                                <?php echo word_limiter($note->content); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="incidents">
                    <br/>
                    <?php foreach ($incidents as $incident): ?>
                        <div class="box  box-info">
                            <div class="box-header with-border">
                                <div class="box-title">
                                    <em class="text-olive small">
                                        <?php echo format_date($incident->date_occurred); ?>
                                        <?php echo lang('by'); ?>
                                        <?php echo $this->user->user($incident->user_id)->first_name; ?>
                                        <?php echo $this->user->user($incident->user_id)->last_name; ?>
                                    </em>
                                    <br/>
                                    <a style="color: #1974cc;"
                                       href="?viewIncident=<?php echo $incident->id; ?>#view-notes"
                                       class="text-info"> <?php echo $incident->title; ?></a>
                                </div>
                                <?php if (!is('parent')): ?>
                                    <a class="pull-right delete "
                                       href="<?php echo site_url('child/deleteIncident/' . $incident->id); ?>">
                                        <i class="fa fa-trash-o text-danger"></i></a>
                                <?php endif; ?>
                            </div>
                            <div class="box-body">
                                <?php echo word_limiter($incident->description); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if (isset($_GET['viewNote']) || isset($_GET['viewIncident'])): ?>
                    <div role="tabpanel" class="tab-pane fade" id="view-notes">
                        <?php if (isset($_GET['viewNote'])) {
                            $this->load->view('modules/child/notes/view-note');
                        }
                        if (isset($_GET['viewIncident'])) {
                            $this->load->view('modules/child/notes/view-incident');
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

<?php $this->load->view('modules/child/notes/create-note'); ?>
<?php $this->load->view('modules/child/notes/incident'); ?>