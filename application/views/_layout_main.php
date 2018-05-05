<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Klasifikasi Penggunaan Narkoba</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                      
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href=""</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <!-- <img src="<?php echo base_url();?>assets/assets/images/users/avatar.jpg" alt="John Doe"/> -->
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url();?>assets/assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $this->session->userdata('username') ?></div>
                                <div class="profile-data-title"><?php echo $this->session->userdata('nama')?></div>
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url('profile')?>" class="profile-control-left"><span class="fa fa-user"></span></a>
                                <a href="javascript::void(0)" data-box="#mb-signout" class="profile-control-right mb-control"><span class="fa fa-sign-out"></span></a>
                            </div>
                        </div>                                                                        
                    </li>                    
                    <li <?php echo $this->uri->rsegment(1)=='dashboard'?'class="active"':'';?>>
                        <a href=<?=base_url()."dashboard"?>><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li <?php echo $this->uri->rsegment(1)=='probabilitas'?'class="active"':'';?>>
                        <a href=<?=base_url()."probabilitas"?>><span class="fa fa-paperclip"></span><span class="xn-text">Probabilitas</span></a>
                    </li>
                    <li <?php echo $this->uri->rsegment(1)=='Klasifikasi'?'class="active"':'';?>>
                    	<a href=<?=base_url()."Klasifikasi"?>><span class="fa fa-cogs"></span> <span class="xn-text">Klasifikasi</span></a>
                    </li>
                    <li  <?php echo $this->uri->rsegment(1)=='data_pasien_sampling'?'class="active"':'';?>>
                        <a href=<?=base_url()."data_pasien_sampling"?>><span class="fa fa-archive"></span> <span class="xn-text">Data Pasien</span></a>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- POWER OFF -->
                    <!--<li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="<?php echo base_url('profile')?>"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="javascript::void(0)" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> -->
                    <!-- END POWER OFF -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">&nbsp;</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <?php $this->load->view($subview) ;?>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('auth/logout');?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url();?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url();?>assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                      

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/tableExport.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jquery.base64.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/html2canvas.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/jspdf.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/libs/base64.js"></script>
    	<script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-select.js'></script>        

        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/maskedinput/jquery.maskedinput.min.js'></script>        
        <!-- END THIS PAGE PLUGINS-->  
        
        <!-- START TEMPLATE 
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/settings.js"></script>
        -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>
</html>