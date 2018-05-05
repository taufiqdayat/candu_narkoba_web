					<div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Import Data</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open('',' id="validate" role="form" class="form-horizontal" enctype="multipart/form-data"');?>
                                    <?php echo validation_errors(); ?>                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">File (.xls):</label>
                                            <div class="col-md-9">
                                                <input name="dokumen" type="file" class="validate[required] form-control"/>
                                            </div>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <a href="<?php echo base_url($this->uri->rsegment(1));?>" class="btn btn-primary">Cancel</a>
                                            <button class="btn btn-primary" type="submit" name="import" value="import">Import</button>
                                        </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            

                        </div>
                    </div>