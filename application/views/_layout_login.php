<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login nbc</title>            
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
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title" align="center">Selamat datang di Klasifikasi Narkoba,<br>silakan login !</div>
                    <?php 
                    echo form_open($this->uri->rsegment(1).'/cek_login','class="form-horizontal"');
                    if ($this->session->flashdata('error')){
                        echo '<div class="alert alert-danger" role="alert"><strong>Warning!</strong>'.$this->session->flashdata('error').'</div>';
                    }
                    if (validation_errors()){
                        echo '<div class="alert alert-danger" role="alert"><strong>Warning!</strong>'.validation_errors().'</div>';
                    }
                	?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    <?php echo form_close();?>
                </div>
                <div class="login-footer">
                    <div align="center">
                        &copy; <?php echo date('Y');?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>