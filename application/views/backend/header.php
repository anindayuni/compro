 <!-- Page Loader -->
<div class="page-loader-wrapper">   
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="<?php echo base_url('assets/backend/images/logo.svg'); ?>" width="48" height="48" alt="sQuare"></div>
        <p>Harap Tunggu ...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="top_navbar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="navbar-logo">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?php echo base_url('assets/backend/images/logo.svg'); ?>" width="30" alt="infinity"><span class="m-l-10">Company Profile - CMS</span></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            Pengguna <i class="icon-user"></i>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li>
                                <div class="user-info">
                                    <h6 class="user-name m-b-0">Admin</h6>
                                </div>
                            </li>
                            <hr>
                            <li><a href="#cek-password"><i class="icon-key m-r-10"></i> <span>Ubah Password</span></a></li>
                            <hr>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('logincms/login/logout'); ?>" >Keluar <i class="icon-logout"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar"><i class="icon-equalizer"></i></a></li>
                </ul>
            </div>
        </div>        
    </div>
</nav>
                            <!--  Modal Cek Password -->
                            <div class="light-modal" id="cek-password" role="dialog" aria-labelledby="light-modal-label" aria-hidden="false">
                                <div class="light-modal-content  animated zoomInUp">
                                    <div class="light-modal-header">
                                        <h3 class="light-modal-heading"> Konfirmasi Password Lama</h3>
                                        <a href="#" class="light-modal-close-icon" aria-label="close">&times;</a>
                                    </div>

                                    <!-- light modal body -->
                                    <div class="light-modal-body">
                                        <div></div>
                                        <form method="post" action="<?php echo base_url('logincms/user');?>">
                                            <label for="email_address">Username / Email</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Username Atau Email Lama *" name="user_login" required>
                                            </div>
                                            <label for="password">Password</label>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password Lama *" name="user_password" required>
                                            </div>
                                            <br><br>
                                            <a href="<?php echo base_url('logincms/home');?>" class="btn btn-raised btn-primary btn-round waves-effect">
                                                CANCEL
                                            </a>
                                            <a href="<?php echo base_url('logincms/user');?>">
                                                <button class="btn btn-raised btn-primary btn-round waves-effect" align="right" type="submit">OK</button>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="light-modal-footer">

                                    </div>
                                </div>
                            </div>
                            <!-- / Modal Cek Password -->

