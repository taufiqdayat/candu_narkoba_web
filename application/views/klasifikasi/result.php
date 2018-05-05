					<div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Naive Bayes Classifier Result</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open('',' id="validate" role="form" class="form-horizontal"');?>
                                    <?php echo validation_errors(); ?>                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nama Pasien:</label>
                                            <div class="col-md-9">
                                                <?php echo $nama;?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Umur Pasien:</label>
                                            <div class="col-md-9">
                                                <?php echo $umur;?>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Kelamin Pasien:</label>
                                            <div class="col-md-3">
                                            	<?php echo $jk;?>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pendidikan Pasien:</label>
                                            <div class="col-md-3">
                                            	<?php echo $pendidikan;?>             
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Faktor Pemicu:</label>
                                            <div class="col-md-3">
                                            	<?php echo $faktor;?>             
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Overdosis:</label>
                                            <div class="col-md-3">
                                            	<?php echo $overdosis;?>             
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cara Penggunaan:</label>
                                            <div class="col-md-3">
                                            	<?php echo $cara;?>             
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Ekonomi Pasien:</label>
                                            <div class="col-md-3">
                                            	<?php echo $ekonomi;?>             
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">ASSIST Pasien:</label>
                                            <div class="col-md-9">
                                            	<?php
                                                $info='';
                                                switch ($assist) {
                                                    case 1:
                                                        $info='Tidak ada interverensi';
                                                    break;
                                                    case 2:
                                                        $info='Interverensi singkat';
                                                    break;
                                                    case 3:
                                                        $info='Pengobatan yang lebih intensif';
                                                    break;
                                                }
                                                echo $assist.' ('.$info.')';?>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">DAST Pasien:</label>
                                            <div class="col-md-9">
                                            	<?php
                                                $info='';
                                                switch ($dast) {
                                                    case 1:
                                                        $info='Tidak masalah dilaporkan';
                                                    break;
                                                    case 2:
                                                        $info='Tingkat rendah';
                                                    break;
                                                    case 3:
                                                        $info='Tingkat moderate';
                                                    break;
                                                    case 4:
                                                        $info='Tingkat substansi';
                                                    break;
                                                    case 5:
                                                        $info='Tingkat berat';
                                                    break;
                                                }    
											    echo $dast.' ('.$info.')';?>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tingkat Kecanduan Pasien:</label>
                                            <div class="col-md-3">
                                                <?php
                                                $info='';
                                                switch ($kecanduan) {
                                                    case 1:
                                                        $info='User';
                                                    break;
                                                    case 2:
                                                        $info='Be user';
                                                    break;
                                                    case 3:
                                                        $info='Addict';
                                                    break;
                                                }
                                                echo '<strong>'.$kecanduan.' ('.$info.')</strong>';
                                                ?>

                                            </div>                    
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Detail :</label>
                                            <div class="col-md-4">
                                                <table border="1px">
                                                    <tr>
                                                        <td style="padding:7px">User</td>
                                                        <td style="padding:7px"><?=number_format($ujicoba2['c5'],5)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:7px">Be User</td>
                                                        <td style="padding:7px"><?=number_format($ujicoba2['c6'],5)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:7px">Addict</td>
                                                        <td style="padding:7px"><?=number_format($ujicoba2['c7'],5)?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <a href="<?php echo base_url($this->uri->rsegment(1));?>" class="btn btn-primary">Finish</a>
                                        </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->
                        </div>
                    </div>