<!--
<?php if (!is('parent')): ?>
    <?php echo form_open('child/' . $child->id); ?>
    <?php echo form_hidden('child_id', $child->id); ?>
<?php endif; ?>
<table class="table">
    <tr>
        <td><?php echo lang('first_name'); ?></td>
        <td>
            <input class="form-control" required="" type="text" name="first_name"
                   value="<?php echo $child->first_name; ?>"/>
        </td>
    </tr>
    <tr>
        <td><?php echo lang('last_name'); ?></td>
        <td><input class="form-control" required="" type="text" name="last_name"
                   value="<?php echo $child->last_name; ?>"/></td>
    </tr>
    <tr>
        <td><?php echo lang('birthday'); ?></td>
        <td><input class="form-control" id="bday" required="" type="date" name="bday"
                   value="<?php echo date('Y-m-d', strtotime($child->bday)); ?>"/></td>
    </tr>
    <tr>
        <td><?php echo lang('national_id'); ?></td>
        <td><input type="text" name="national_id" required value="<?php echo decrypt($child->national_id); ?>"
                   class="form-control"/></td>
    </tr>
    <tr>
        <td><?php echo lang('gender'); ?></td>
        <td>
            <select required class="form-control" name="gender">
                <option value="">--<?php echo lang('select'); ?>--</option>
                <option value="male" <?php echo selected_option($child->gender, 'male'); ?>>
                    <?php echo lang('male'); ?>
                </option>
                <option value="female" <?php echo selected_option($child->gender, 'female'); ?>>
                    <?php echo lang('female'); ?>
                </option>
                <option value="other" <?php echo selected_option($child->gender, 'other'); ?>>
                    <?php echo lang('other'); ?>
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td><?php echo lang('blood_type'); ?></td>
        <td>
            <select name="blood_type" required class="form-control">
                <option value="unknown">--<?php echo lang('select'); ?>--</option>
                <option <?php echo selected_option("A-", $child->blood_type); ?> value="A-">A-</option>
                <option <?php echo selected_option("A+", $child->blood_type); ?> value="A+">A+</option>
                <option <?php echo selected_option("B-", $child->blood_type); ?> value="B-">B-</option>
                <option <?php echo selected_option("B+", $child->blood_type); ?> value="B+">B+</option>
                <option <?php echo selected_option("AB-", $child->blood_type); ?> value="AB-">AB-</option>
                <option <?php echo selected_option("AB+", $child->blood_type); ?> value="AB+">AB+</option>
                <option <?php echo selected_option("O-", $child->blood_type); ?> value="O-">O-</option>
                <option <?php echo selected_option("O+", $child->blood_type); ?> value="O+">O+</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><?php echo lang('status'); ?></td>
        <td>
            <select class="form-control" name="status" required>
                <option <?php echo selected_option($child->status, 1); ?> value="1">
                    <?php echo lang('active'); ?>
                </option>
                <option <?php echo selected_option($child->status, 2); ?> value="2">
                    <?php echo lang('inactive'); ?>
                </option>
            </select>
        </td>
    </tr>
    <?php if (!is('parent')): ?>
        <tr>
            <td></td>
            <td>
                <button class="btn btn-primary"><?php echo lang('update'); ?></button>
            </td>
        </tr>
    <?php endif; ?>
</table>
<?php if (!is('parent')): ?>
    <?php echo form_close(); ?>
<?php endif; ?>
-->


          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a class="active" href="#parent_info" data-toggle="tab">Parent Information</a></li>
              <li><a href="#Authorized_pickup" data-toggle="tab">Authorized Pickup</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="parent_info">
              
				<?php if (!is('parent')): ?>
					<?php echo form_open('child/' . $child->id); ?>
					<?php echo form_hidden('child_id', $child->id); ?>
				<?php endif; ?>
				<table class="table pofile_table">
					<tr>
						<td><?php echo lang('name'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="name"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('phone_number'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="phone"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('other_phone_number'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="other_phone"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('email'); ?></td>
						<td>
							<input class="form-control" required="" type="email" name="email"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('password'); ?></td>
						<td>
							<input class="form-control" required="" type="password" name="password"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('home_address'); ?></td>
						<td>
							<textarea class="form-control" required="" type="text" name="home_add"></textarea>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('work_address'); ?></td>
						<td>
							<textarea class="form-control" required="" type="text" name="work_add"></textarea>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('city'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="city"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('postal / zip code'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="post_zip"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('state / province'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="state_province"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('country'); ?></td>
						<td>
							<select name="country" required class="form-control">
								<option value="unknown">--<?php echo lang('select'); ?>--</option>
								<option <?php echo selected_option("India", $child->blood_type); ?> value="India">India</option>
								<option <?php echo selected_option("United Arab Emirates", $child->blood_type); ?> value="United Arab Emirates">United Arab Emirates</option>
								<option <?php echo selected_option("United States America", $child->blood_type); ?> value="United States America">United States America</option>
								<option <?php echo selected_option("United Kingdom", $child->blood_type); ?> value="United Kingdom">United Kingdom</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('relationship'); ?></td>
						<td>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="pickup" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Father</label>
							</div>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="guardian" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Mother</label>
							</div>
						</td>
					</tr>
					<tr>
						<td><?php echo lang('pickup'); ?></td>
						<td>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="pickup" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Pickup</label>
							</div>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="guardian" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Guardian</label>
							</div>
						</td>
					</tr>
					
					
					<!--<tr>
						<td><?php echo lang('last_name'); ?></td>
						<td><input class="form-control" required="" type="text" name="last_name"
								   value="<?php echo $child->last_name; ?>"/></td>
					</tr>
					<tr>
						<td><?php echo lang('birthday'); ?></td>
						<td><input class="form-control" id="bday" required="" type="date" name="bday"
								   value="<?php echo date('Y-m-d', strtotime($child->bday)); ?>"/></td>
					</tr>
					<tr>
						<td><?php echo lang('national_id'); ?></td>
						<td><input type="text" name="national_id" required value="<?php echo decrypt($child->national_id); ?>"
								   class="form-control"/></td>
					</tr>
					<tr>
						<td><?php echo lang('gender'); ?></td>
						<td>
							<select required class="form-control" name="gender">
								<option value="">--<?php echo lang('select'); ?>--</option>
								<option value="male" <?php echo selected_option($child->gender, 'male'); ?>>
									<?php echo lang('male'); ?>
								</option>
								<option value="female" <?php echo selected_option($child->gender, 'female'); ?>>
									<?php echo lang('female'); ?>
								</option>
								<option value="other" <?php echo selected_option($child->gender, 'other'); ?>>
									<?php echo lang('other'); ?>
								</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><?php echo lang('blood_type'); ?></td>
						<td>
							<select name="blood_type" required class="form-control">
								<option value="unknown">--<?php echo lang('select'); ?>--</option>
								<option <?php echo selected_option("A-", $child->blood_type); ?> value="A-">A-</option>
								<option <?php echo selected_option("A+", $child->blood_type); ?> value="A+">A+</option>
								<option <?php echo selected_option("B-", $child->blood_type); ?> value="B-">B-</option>
								<option <?php echo selected_option("B+", $child->blood_type); ?> value="B+">B+</option>
								<option <?php echo selected_option("AB-", $child->blood_type); ?> value="AB-">AB-</option>
								<option <?php echo selected_option("AB+", $child->blood_type); ?> value="AB+">AB+</option>
								<option <?php echo selected_option("O-", $child->blood_type); ?> value="O-">O-</option>
								<option <?php echo selected_option("O+", $child->blood_type); ?> value="O+">O+</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><?php echo lang('status'); ?></td>
						<td>
							<select class="form-control" name="status" required>
								<option <?php echo selected_option($child->status, 1); ?> value="1">
									<?php echo lang('active'); ?>
								</option>
								<option <?php echo selected_option($child->status, 2); ?> value="2">
									<?php echo lang('inactive'); ?>
								</option>
							</select>
						</td>
					</tr>
					<?php if (!is('parent')): ?>
						<tr>
							<td></td>
							<td>
								<button class="btn btn-primary"><?php echo lang('update'); ?></button>
							</td>
						</tr>-->
					<?php endif; ?>
				</table>
				<?php if (!is('parent')): ?>
					<?php echo form_close(); ?>
				<?php endif; ?>

              </div>    
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="Authorized_pickup">
                <table class="table pofile_table">
					<tr>
						<td><?php echo lang('name'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="name"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('phone_number'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="phone"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('other_phone_number'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="other_phone"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('email'); ?></td>
						<td>
							<input class="form-control" required="" type="email" name="email"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('password'); ?></td>
						<td>
							<input class="form-control" required="" type="password" name="password"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('home_address'); ?></td>
						<td>
							<textarea class="form-control" required="" type="text" name="home_add"></textarea>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('work_address'); ?></td>
						<td>
							<textarea class="form-control" required="" type="text" name="work_add"></textarea>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('city'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="city"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('postal / zip code'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="post_zip"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('state / province'); ?></td>
						<td>
							<input class="form-control" required="" type="text" name="state_province"/>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('country'); ?></td>
						<td>
							<select name="country" required class="form-control">
								<option value="unknown">--<?php echo lang('select'); ?>--</option>
								<option <?php echo selected_option("India", $child->blood_type); ?> value="India">India</option>
								<option <?php echo selected_option("United Arab Emirates", $child->blood_type); ?> value="United Arab Emirates">United Arab Emirates</option>
								<option <?php echo selected_option("United States America", $child->blood_type); ?> value="United States America">United States America</option>
								<option <?php echo selected_option("United Kingdom", $child->blood_type); ?> value="United Kingdom">United Kingdom</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td><?php echo lang('relationship'); ?></td>
						<td>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="pickup" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Father</label>
							</div>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="guardian" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Mother</label>
							</div>
						</td>
					</tr>
					<tr>
						<td><?php echo lang('pickup'); ?></td>
						<td>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="pickup" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Pickup</label>
							</div>
							<div class="chk">
							<input class="form-control chk-col-grey" required="" type="checkbox" name="guardian" style="left:auto;"/>
							<label class="control-sidebar-subheading ">Guardian</label>
							</div>
						</td>
					</tr>
					
					
					<!--<tr>
						<td><?php echo lang('last_name'); ?></td>
						<td><input class="form-control" required="" type="text" name="last_name"
								   value="<?php echo $child->last_name; ?>"/></td>
					</tr>
					<tr>
						<td><?php echo lang('birthday'); ?></td>
						<td><input class="form-control" id="bday" required="" type="date" name="bday"
								   value="<?php echo date('Y-m-d', strtotime($child->bday)); ?>"/></td>
					</tr>
					<tr>
						<td><?php echo lang('national_id'); ?></td>
						<td><input type="text" name="national_id" required value="<?php echo decrypt($child->national_id); ?>"
								   class="form-control"/></td>
					</tr>
					<tr>
						<td><?php echo lang('gender'); ?></td>
						<td>
							<select required class="form-control" name="gender">
								<option value="">--<?php echo lang('select'); ?>--</option>
								<option value="male" <?php echo selected_option($child->gender, 'male'); ?>>
									<?php echo lang('male'); ?>
								</option>
								<option value="female" <?php echo selected_option($child->gender, 'female'); ?>>
									<?php echo lang('female'); ?>
								</option>
								<option value="other" <?php echo selected_option($child->gender, 'other'); ?>>
									<?php echo lang('other'); ?>
								</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><?php echo lang('blood_type'); ?></td>
						<td>
							<select name="blood_type" required class="form-control">
								<option value="unknown">--<?php echo lang('select'); ?>--</option>
								<option <?php echo selected_option("A-", $child->blood_type); ?> value="A-">A-</option>
								<option <?php echo selected_option("A+", $child->blood_type); ?> value="A+">A+</option>
								<option <?php echo selected_option("B-", $child->blood_type); ?> value="B-">B-</option>
								<option <?php echo selected_option("B+", $child->blood_type); ?> value="B+">B+</option>
								<option <?php echo selected_option("AB-", $child->blood_type); ?> value="AB-">AB-</option>
								<option <?php echo selected_option("AB+", $child->blood_type); ?> value="AB+">AB+</option>
								<option <?php echo selected_option("O-", $child->blood_type); ?> value="O-">O-</option>
								<option <?php echo selected_option("O+", $child->blood_type); ?> value="O+">O+</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><?php echo lang('status'); ?></td>
						<td>
							<select class="form-control" name="status" required>
								<option <?php echo selected_option($child->status, 1); ?> value="1">
									<?php echo lang('active'); ?>
								</option>
								<option <?php echo selected_option($child->status, 2); ?> value="2">
									<?php echo lang('inactive'); ?>
								</option>
							</select>
						</td>
					</tr>
					<?php if (!is('parent')): ?>
						<tr>
							<td></td>
							<td>
								<button class="btn btn-primary"><?php echo lang('update'); ?></button>
							</td>
						</tr>-->
					<?php endif; ?>
				</table>
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="Food">
                <form class="form-horizontal form-element col-12">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <div class="checkbox">
                       	<input type="checkbox" id="basic_checkbox_1" checked="">
						<label for="basic_checkbox_1"> I agree to the</label>
                          &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        </div>