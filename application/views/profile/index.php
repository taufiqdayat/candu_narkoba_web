					<div class="row">
                        <div class="col-md-6">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Profile</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open('',' id="validate" role="form" class="form-horizontal"');?>
                                    <?php echo validation_errors(); ?>                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Username Admin:</label>
                                            <div class="col-md-9">
                                                <input name="username" type="text" class="validate[required] form-control" value="<?php echo $admin->USERNAME_ADMIN;?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nama Admin:</label>
                                            <div class="col-md-9">
                                                <input name="nama" type="text" class="validate[required] form-control" value="<?php echo $admin->NAMA_ADMIN;?>"/>
                                            </div>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <a href="<?php echo base_url('dashboard');?>" class="btn btn-primary">Cancel</a>
                                            <button class="btn btn-primary" type="submit" name="save_profile" value="save_profile">Save</button>
                                        </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            

                        </div>
                        <div class="col-md-6">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Password</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open('',' id="validate" role="form" class="form-horizontal"');?>
                                    <?php echo validation_errors(); ?>                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">New Password:</label>
                                            <div class="col-md-9">
                                                <input name="password" type="password" class="validate[required] form-control" id="password"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Confirm Password:</label>
                                            <div class="col-md-9">
                                                <input name="conf_password" type="password" class="validate[required,equals[password]] form-control"/>
                                            </div>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <a href="<?php echo base_url('dashboard');?>" class="btn btn-primary">Cancel</a>
                                            <button class="btn btn-primary" type="submit" name="save_password" value="save_password">Save</button>
                                        </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            

                        </div>
                    </div>