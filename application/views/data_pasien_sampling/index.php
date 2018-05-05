					<div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Pasien</h3>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Data Option</button>
                                        <ul class="dropdown-menu">
                                        	<li><a href="<?php echo base_url()."klasifikasi";?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
                                            <li><a href=<?=base_url()."data_pasien_sampling/manual"?>><i class="fa fa-plus"></i>Tambah Data Manual</a></li>
                                        </ul>

                                    </div>                                    
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="customers2" class="table datatable table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                	<th width="5%"><div align="center">No</div></th>
                                                    <th width="20%"><div align="center">Nama</div></th>
                                                    <th width="10%"><div align="center">Umur</div></th>
                                                    <th width="5%"><div align="center">JK</div></th>
                                                    <th width="10%"><div align="center">Pendidikan</div></th>
                                                    <th width="10%"><div align="center">Faktor</div></th>
                                                    <th width="10%"><div align="center">Overdosis</div></th>
                                                    <th width="10%"><div align="center">Cara Penggunaan</div></th>
                                                    <th width="10%"><div align="center">Ekonomi</div></th>
                                                    <th width="10%"><div align="center">ASSIST</div></th>
                                                    <th width="10%"><div align="center">DAST</div></th>
                                                    <th width="10%"><div align="center">Kecanduan</div></th>
                                                    <th width="20%"><div align="center">Actions</div></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $no=1;
                                            foreach ($all as $val):
                                            ?>
                                                <tr>
                                                	<td><div align="center"><?php echo $no;?></div></td>
                                                    <td><div align="left"><?php echo $val->NAMA_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="right"><?php echo $val->UMUR_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="center"><?php echo $val->JK_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="center"><?php echo $val->PENDIDIKAN_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="center"><?php echo $val->FAKTOR_PEMICU_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="center"><?php echo $val->OVERDOSIS_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="center"><?php echo $val->CARA_PENGGUNAAN_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="center"><?php echo $val->EKONOMI_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="right"><?php echo $val->ASSIST_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="right"><?php echo $val->DAST_PASIEN_SAMPLING;?></div></td>
                                                    <td><div align="center"><?php 
                                                    if ($val->KECANDUAN_PASIEN_SAMPLING == 1) {
                                                        echo "user";
                                                    }elseif($val->KECANDUAN_PASIEN_SAMPLING ==2){
                                                        echo "beuser";
                                                    }elseif($val->KECANDUAN_PASIEN_SAMPLING ==3){
                                                        echo "addict";
                                                    }
                                                    ?></div></td>
                                                    <td>
                                                    	<div align="center">
                                                            <div class="btn-group">
                                                            	<!-- <a href="<?php echo base_url($this->uri->rsegment(1).'/edit/'.$val->ID_PASIEN_SAMPLING);?>" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span></a> -->
                                                                <a href="<?php echo base_url($this->uri->rsegment(1).'/delete/'.$val->ID_PASIEN_SAMPLING);?>" class="btn btn-danger btn-xs" onClick="return confirm('Yakin ingin menghapus data?');"><span class="fa fa-times"></span></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            $no++;
                                            endforeach;?>
                                            </tbody>
                                        </table>                                    
                                    </div>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            

                        </div>
                    </div>