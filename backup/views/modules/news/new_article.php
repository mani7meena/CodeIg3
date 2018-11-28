<div class="row">
    <div class="col-sm-3">
        <?php $this->load->view($this->module.'sidebar'); ?>
    </div>
    <div class="col-sm-9 col-md-9 col-lg-9">
        <h2>
            <i class="fa fa-clipboard" aria-hidden="true"></i> <?php echo lang('new_article'); ?></h2>
        <?php echo form_open('news/create'); ?>

        <label><?php echo lang('title'); ?></label>
        <input type="text"
               name="article_name"
               class="form-control"
               required="" placeholder="<?php echo lang('title'); ?>"
               value=""/>
        <br/>

        <label><?php echo lang('list_order'); ?></label>
        <input
                type="text"
                name="article_order"
                class="form-control"
                required="" placeholder=""
                value="0"/>

        <div class="box-body">
            <label>  <?php echo lang('content'); ?></label>
            
                      <textarea name="article_body" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

        </div>
        <div class="box-footer">
            <button class="btn btn-primary"><?php echo lang('submit'); ?></button>
        </div>
        <?php echo form_close(); ?>
    </div>

</div>