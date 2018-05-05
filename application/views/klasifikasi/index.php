					<div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Form Klasifikasi</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo form_open($this->uri->rsegment(1).'/nbc',' id="validate" role="form" class="form-horizontal"');?>
                                    <?php echo validation_errors(); ?>                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nama Pasien:</label>
                                            <div class="col-md-9">
                                                <input name="nama" type="text" class="validate[required] form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Umur Pasien:</label>
                                            <div class="col-md-9">
                                                <input name="umur" type="text" class="validate[required,custom[integer],min[1],max[120]] form-control"/>
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Kelamin Pasien:</label>
                                            <div class="col-md-3">
                                                <select name="jk" class="validate[required] select">
                                                    <option value="L">Laki - Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pendidikan Pasien:</label>
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
                                            <label class="col-md-3 control-label">Faktor Pemicu:</label>
                                            <div class="col-md-3">
                                                <select name="faktor" class="validate[required] select">
                                                    <option>Diri</option>
                                                    <option>Faktor Ketersediaan</option>
                                                    <option>Lingkungan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Overdosis:</label>
                                            <div class="col-md-3">
                                                <select name="overdosis" class="validate[required] select">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cara Penggunaan:</label>
                                            <div class="col-md-3">
                                                <select name="cara" class="validate[required] select">
                                                    <option>Disuntik</option>
                                                    <option>Dihisap</option>
                                                    <option>Ditelan</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Ekonomi:</label>
                                            <div class="col-md-3">
                                                <select name="ekonomi" class="validate[required] select">
                                                    <option>MK</option>
                                                    <option>MA</option>
                                                    <option>M</option>
                                                </select>                           
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">ASSIST Pasien:</label>
                                            <div class="col-md-9">
                                            Nilai ASSIST akan muncul setelah mengisi form dibawah ini,<br>
                                            Selama 3 bulan terakhir, seberapa sering pasien menggunakan zat dibawah ini :
                                            </div>                        
                                        </div>
                                        <?php 
                                        $pertanyaan_a=array(
                                            'a. Tembakau (rokok, cerutu, kretek, dll)',
                                            'b. Minuman berakohol (bir, anggur, spiritus, dll)',
                                            'c. Kanabis (marijuana, ganja, gelek, cimengpot, dll)',
                                            'd. Kokain (coke, crack, etc)',
                                            'e. Stimulan jenis amfetamin (ekstasi, shabu, dll)',
                                            'f. Inhalansia (lem, bensin, tiner, dll)',
                                            'g. Sedativa atau obat tidur (Benzodiazepin, Lexotan, Rohypnol, Mogadon, dll)',
                                            'h. Halisinogens (LSD, mushrooms, PCP, dll)',
                                            'i. Oploid (heroin, morfin, metadon, kodein, dll)',
                                            'j. Zat lain',
                                        );
                                        ?>
                                        <?php for ($i=0;$i<10;$i++){?>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label"><?php echo $pertanyaan_a[$i];?></label>
                                            <div class="col-md-6">
                                                <select name="assist[]" class="validate[required] select">
                                                    <option value="0">Tidak pernah</option>
                                                    <option value="2">Satu atau dua kali</option>
                                                    <option value="3">Tiap bulan</option>
                                                    <option value="4">Tiap minggu</option>
                                                    <option value="6">Harian atau hampir tiap hari</option>
                                                </select>
                                            </div>                        
                                        </div>
                                        <?php }?>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">DAST Pasien:</label>
                                            <div class="col-md-9">
                                            	Nilai DAST akan muncul setelah mengisi form dibawah ini
                                            </div>                        
                                        </div>
                                        <?php 
                                        $pertanyaan = array(
                                            '1. Apakah anda menggunakan minuman keras?',
                                            '2. Apakah anda menyalahgunakan obat hingga mabuk?',
                                            '3. Apakah anda penyalahguna lebih dari satu narkoba / minuman keras pada suatu waktu?',
                                            '4. Anda bisa mendapatkan setiap minggunya tanpa menggunakan obat / minuman keras?',
                                            '5. Apakah anda selalu dapat berhenti menggunakan narkoba / minuman keras bila diinginkan?',
                                            '6. Apakah anda telah kehilangan memori atau kenangan sementara obat masa selama yang memabukkan sebagai akibat pengalaman dari narkoba sat ini / penggunaan yang memabukkan?',
                                            '7. Apakah anda pernah merasa bersalah tentang penggunaan narkoba anda?',
                                            '8. Apakah pasangan anda atau orang tua pernah mengeluh tentang keterlibatan anda dengan minuman keras?',
                                            '9. Apakah obat yang memabukkan dan membuat masalah/antara anda dan pasangan anda atau orang tua anda?',
                                            '10. Apakah anda kehilangan teman karena penggunaan obat / minuman keras?',
                                            '11. Apakah anda diabaikan keluarga karena penggunaan obat / minuman keras?',
                                            '12. Apakah anda berada dalam kesulitan di tempat kerja karena penggunaan minuman keras?',
                                            '13. Apakah anda kehilangan pekerjaan karena obat / minuman keras yang anda gunakan?',
                                            '14. Apakah anda berkelahi ketika dibawah pengaruh minuman keras?',
                                            '15. Apakah anda terlibat dalam kegiatan ilegal untuk mendapatkan minuman keras?',
                                            '16. Apakah anda pernah ditangkap karena memiliki obat terlarang?',
                                            '17. Apakah anda pernah mengalami gejala withdrawl (merasa sakit) bila anda berhenti minum obat / minuman keras?',
                                            '18. Apakah anda memiliki masalah medis akibat dari penggunaan yang memabukkan (misal kejang, hepatitis, dll)?',
                                            '19. Apakah anda pergi ke salah satu bantuan untuk masalah narkoba?',
                                            '20. Apakah anda pernah terlibat dalam pengobatan khusus terkait? penggunaan minuman keras?',
                                            );
                                        ?>
                                        <?php for ($i=0;$i<20;$i++){?>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label"><?php echo $pertanyaan[$i];?></label>
                                            <div class="col-md-6">
                                                <select name="dast[]" class="validate[required] select">
                                                    <option value="1">Ya</option>
                                                    <option value="0" selected>Tidak</option>
                                                </select>
                                            </div>                        
                                        </div>
                                        <?php }?>
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