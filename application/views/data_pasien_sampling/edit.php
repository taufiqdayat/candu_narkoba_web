					<div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo !empty($data_pasien_sampling->ID_PASIEN_SAMPLING) ? 'Edit Data '.$data_pasien_sampling->NAMA_PASIEN_SAMPLING : 'Tambah Data';?></h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open('',' id="validate" role="form" class="form-horizontal"');?>
                                    <?php echo validation_errors(); ?>                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nama Pasien:</label>
                                            <div class="col-md-9">
                                                <input name="nama" type="text" class="validate[required] form-control" value="<?php echo !empty($data_pasien_sampling->ID_PASIEN_SAMPLING) ? $data_pasien_sampling->NAMA_PASIEN_SAMPLING : '';?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Umur Pasien:</label>
                                            <div class="col-md-9">
                                                <input name="umur" type="text" class="validate[required,custom[integer],min[1],max[120]] form-control" value="<?php echo !empty($data_pasien_sampling->ID_PASIEN_SAMPLING) ? $data_pasien_sampling->UMUR_PASIEN_SAMPLING : '';?>"/>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Kelamin Pasien:</label>
                                            <div class="col-md-3">
                                                <select name="jk" class="validate[required] select">
                                                    <option value="L" <?php echo $data_pasien_sampling->JK_PASIEN_SAMPLING=='L' ? 'selected' : '';?>>Laki - Laki</option>
                                                    <option value="P" <?php echo $data_pasien_sampling->JK_PASIEN_SAMPLING=='P' ? 'selected' : '';?>>Perempuan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pendidikan Pasien:</label>
                                            <div class="col-md-3">
                                                <select name="pendidikan" class="validate[required] select">
                                                    <option <?php echo $data_pasien_sampling->PENDIDIKAN_PASIEN_SAMPLING=='Tidak Sekolah' ? 'selected' : '';?>>Tidak Sekolah</option>
                                                    <option <?php echo $data_pasien_sampling->PENDIDIKAN_PASIEN_SAMPLING=='SD' ? 'selected' : '';?>>SD</option>
                                                    <option <?php echo $data_pasien_sampling->PENDIDIKAN_PASIEN_SAMPLING=='SMP' ? 'selected' : '';?>>SMP</option>
                                                    <option <?php echo $data_pasien_sampling->PENDIDIKAN_PASIEN_SAMPLING=='SMA' ? 'selected' : '';?>>SMA</option>
                                                    <option <?php echo $data_pasien_sampling->PENDIDIKAN_PASIEN_SAMPLING=='Sarjana' ? 'selected' : '';?>>Sarjana</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Faktor Pemicu:</label>
                                            <div class="col-md-3">
                                                <select name="faktor" class="validate[required] select">
                                                    <option <?php echo $data_pasien_sampling->FAKTOR_PEMICU_PASIEN_SAMPLING=='Diri' ? 'selected' : '';?>>Diri</option>
                                                    <option <?php echo $data_pasien_sampling->FAKTOR_PEMICU_PASIEN_SAMPLING=='Faktor Ketersediaan' ? 'selected' : '';?>>Faktor Ketersediaan</option>
                                                    <option <?php echo $data_pasien_sampling->FAKTOR_PEMICU_PASIEN_SAMPLING=='Lingkungan' ? 'selected' : '';?>>Lingkungan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Overdosis:</label>
                                            <div class="col-md-3">
                                                <select name="overdosis" class="validate[required] select">
                                                    <option <?php echo $data_pasien_sampling->OVERDOSIS_PASIEN_SAMPLING=='Ya' ? 'selected' : '';?>>Ya</option>
                                                    <option <?php echo $data_pasien_sampling->OVERDOSIS_PASIEN_SAMPLING=='Tidak' ? 'selected' : '';?>>Tidak</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cara Penggunaan:</label>
                                            <div class="col-md-3">
                                                <select name="cara" class="validate[required] select">
                                                    <option <?php echo $data_pasien_sampling->CARA_PENGGUNAAN_PASIEN_SAMPLING=='Disuntik' ? 'selected' : '';?>>Disuntik</option>
                                                    <option <?php echo $data_pasien_sampling->CARA_PENGGUNAAN_PASIEN_SAMPLING=='Dihisap' ? 'selected' : '';?>>Dihisap</option>
                                                    <option <?php echo $data_pasien_sampling->CARA_PENGGUNAAN_PASIEN_SAMPLING=='Ditelan' ? 'selected' : '';?>>Ditelan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Ekonomi:</label>
                                            <div class="col-md-3">
                                                <select name="ekonomi" class="validate[required] select">
                                                    <option <?php echo $data_pasien_sampling->EKONOMI_PASIEN_SAMPLING=='MK' ? 'selected' : '';?>>MK</option>
                                                    <option <?php echo $data_pasien_sampling->EKONOMI_PASIEN_SAMPLING=='MA' ? 'selected' : '';?>>MA</option>
                                                    <option <?php echo $data_pasien_sampling->EKONOMI_PASIEN_SAMPLING=='M' ? 'selected' : '';?>>M</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">ASSIST Pasien:</label>
                                            <div class="col-md-9">
                                                <select name="assist" class="validate[required] select" id="assist">
                                                    <option value="1" <?php echo $data_pasien_sampling->ASSIST_PASIEN_SAMPLING=='1' ? 'selected' : '';?>>Tidak ada interverensi</option>
                                                    <option value="2" <?php echo $data_pasien_sampling->ASSIST_PASIEN_SAMPLING=='2' ? 'selected' : '';?>>Interverensi singkat</option>
                                                    <option value="3" <?php echo $data_pasien_sampling->ASSIST_PASIEN_SAMPLING=='3' ? 'selected' : '';?>>Pengobatan yang lebih intensif</option>
                                                </select>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">DAST Pasien:</label>
                                            <div class="col-md-9">
                                                <select name="dast" class="validate[required] select" id="dast">
                                                    <option value="1" <?php echo $data_pasien_sampling->DAST_PASIEN_SAMPLING=='1' ? 'selected' : '';?>>Tidak masalah dilaporkan</option>
                                                    <option value="2" <?php echo $data_pasien_sampling->DAST_PASIEN_SAMPLING=='2' ? 'selected' : '';?>>Tingkat Rendah</option>
                                                    <option value="3" <?php echo $data_pasien_sampling->DAST_PASIEN_SAMPLING=='3' ? 'selected' : '';?>>Tingkat Moderate</option>
                                                    <option value="4" <?php echo $data_pasien_sampling->DAST_PASIEN_SAMPLING=='4' ? 'selected' : '';?>>Tingkat Substansi</option>
                                                    <option value="5" <?php echo $data_pasien_sampling->DAST_PASIEN_SAMPLING=='5' ? 'selected' : '';?>>Tingkat Berat</option>
                                                </select>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tingkat Kecanduan Pasien:</label>
                                            <div class="col-md-3">
                                                <select name="kecanduan" class="validate[required] select">
                                                    <option value="1" <?php echo $data_pasien_sampling->KECANDUAN_PASIEN_SAMPLING=='1' ? 'selected' : '';?>>User</option>
                                                    <option value="2" <?php echo $data_pasien_sampling->KECANDUAN_PASIEN_SAMPLING=='2' ? 'selected' : '';?>>Be user</option>
                                                    <option value="3" <?php echo $data_pasien_sampling->KECANDUAN_PASIEN_SAMPLING=='3' ? 'selected' : '';?>>Addict</option>
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