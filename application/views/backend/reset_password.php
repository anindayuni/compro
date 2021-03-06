<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Company Profile - Reset Password</title>
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
            <?php echo $this->session->flashdata('msg'); ?>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12">
                
            </div>                        
            <div class="col-lg-12 col-md-12">
                <div class="card-plain">
                    <div class="header">
                        <h5>Atur Ulang Password</h5>
                    </div>
                    <form class="form" method="post">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <div class="input-group">
                            <input type="password" placeholder="Password Baru" class="form-control" name="password" />
                            <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        </div>                            
                    <div class="footer">
                        <button class="btn btn-primary btn-round btn-block" type="submit">KIRIM</button>
                    </div>
                    </form>
                    
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