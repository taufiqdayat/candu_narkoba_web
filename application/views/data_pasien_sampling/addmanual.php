					<div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Naive Bayes Classifier</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open($this->uri->rsegment(1).'/nbc',' id="validate" role="form" class="form-horizontal"');?>
                                    <?php echo validation_errors(); ?>                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nama Pasien : </label>
                                            <div class="col-md-5">
                                                <input name="nama" type="text" class="validate[required] form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Umur Pasien : </label>
                                            <div class="col-md-5">
                                                <input name="umur" type="text" class="validate[required,custom[integer],min[1],max[120]] form-control"/>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Kelamin Pasien : </label>
                                            <div class="col-md-3">
                                                <select name="jk" class="validate[required] select">
                                                    <option value="L">Laki - Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pendidikan Pasien : </label>
                                            <div class="col-md-3">
                                                <select name="pendidikan" class="validate[required] select">
                                                    <option>Tidak Sekolah</option>
                                                    <option>SD</option>
                                                    <option>SMP</option>
                                                    <option>SMA</option>
                                                    <option>Sarjana</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Faktor Pemicu : </label>
                                            <div class="col-md-3">
                                                <select name="faktor" class="validate[required] select">
                                                    <option>Diri</option>
                                                    <option>Faktor Ketersediaan</option>
                                                    <option>Lingkungan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Overdosis : </label>
                                            <div class="col-md-3">
                                                <select name="overdosis" class="validate[required] select">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cara Penggunaan : </label>
                                            <div class="col-md-3">
                                                <select name="cara" class="validate[required] select">
                                                    <option>Disuntik</option>
                                                    <option>Dihisap</option>
                                                    <option>Ditelan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Ekonomi : </label>
                                            <div class="col-md-3">
                                                <select name="ekonomi" class="validate[required] select">
                                                    <option>MK</option>
                                                    <option>MA</option>
                                                    <option>M</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">ASSIST Pasien : </label>
                                            <div class="col-md-3">
                                                <select name="assist" class="validate[required] select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">DAST Pasien : </label>
                                            <div class="col-md-3">
                                            	<select name="dast" class="validate[required] select">
                                                 <option>1</option>   
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                                </select>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                        <label class="col-md-3 control-label">Kecanduan : </label>
                                        <div class="col-md-3">
                                            <select name="kecanduan" class="validate[required] select">
                                                <option value="1">User</option>
                                                <option value="2">Be User</option>
                                                <option value="3">Addict</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <a href="<?php echo base_url($this->uri->rsegment(1));?>" class="btn btn-primary">Cancel</a>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            

                        </div>
                    </div>