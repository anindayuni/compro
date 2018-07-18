<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Company Profile - Login</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/plugins/bootstrap/css/bootstrap.min.css'); ?>">

<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/main.css'); ?>">    
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/color_skins.css'); ?>">

<!-- dialog -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/light-modal.css') ?>"/>
</head>
<body class="theme-purple">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12">
                
            </div>                        
            <div class="col-lg-12 col-md-12">
            <?php echo $this->session->flashdata('msg'); ?>
                <div class="card-plain">
                    <div class="header">
                        <h5>Log in</h5>
                    </div>
                    <form class="form" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="User Name" name="username">
                            <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" class="form-control" name="password" />
                            <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        </div>                            
                    <div class="footer">
                        <button class="btn btn-primary btn-round btn-block">SIGN IN</button>
                    </div>
                    </form>
                    <a href="#kirim-email" class="link">Lupa Password?</a>

                    <!--  Modal Masukkan email -->
                            <div class="light-modal" id="kirim-email" role="dialog" aria-labelledby="light-modal-label" aria-hidden="false">
                                <div class="light-modal-content  animated zoomInUp">
                                    <div class="light-modal-header">
                                        <h3 class="light-modal-heading">Reset Password</h3>
                                        <a href="#" class="light-modal-close-icon" aria-label="close">&times;</a>
                                    </div>

                                    <!-- light modal body -->
                                    <div class="light-modal-body">
                                        <div></div>
                                        <form method="post" action="<?php echo base_url('logincms/login/reset_password');?>">
                                            <label for="email_address">Masukkan Email</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Masukkan Email Anda *" name="user_email" required="">
                                            </div>
                                            
                                            <br>
                                            <a href="#" class="btn btn-raised btn-primary btn-round waves-effect">
                                                CANCEL
                                            </a>
                                            <a href="<?php echo base_url('logincms/login/reset_password');?>">
                                                <button class="btn btn-raised btn-primary btn-round waves-effect" align="right" type="submit">OK</button>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="light-modal-footer">

                                    </div>
                                </div>
                            </div>
                            <!-- / Modal Masukkan Email-->
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php if ($hasil=='berhasil'): ?>
        <script>
            location='<?php echo base_url("logincms/home"); ?>';
        </script>
    <?php endif ?>
    <div id="particles-js"></div>
</div>
<!-- Jquery Core Js -->
<script src="<?php echo base_url('assets/backend/bundles/libscripts.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/backend/bundles/vendorscripts.bundle.js'); ?>"></script> <!-- Lib Scripts Plugin Js -->

<script src="<?php echo base_url('assets/backend/plugins/particles-js/particles.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/particles-js/particles.js'); ?>"></script>
</body>
</html>