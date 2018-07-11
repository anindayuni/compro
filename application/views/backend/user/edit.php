<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Ubah Password</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/home'); ?>"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                                    <li class="breadcrumb-item active">Ubah Password</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Form</strong> Ubah Password</h2>
                        <ul class="header-dropdown">
                            
                        </ul>
                    </div>
                    <div class="body">
                        <?php echo $this->session->flashdata('msg'); ?>
                        <form class="form-horizontal" action="<?php echo base_url('logincms/user/change_user_pass/').$id; ?>" method="POST">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="email_address_2">Username / Email</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="email_address_2" class="form-control" placeholder="Username Atau Email Baru *" name="user_login" required <?php echo $disable; ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="password_2">Password</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="password" id="password_2" class="form-control"  placeholder="Konfirmasi Password *" name="password" required <?php echo $disable; ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="password_2">Konfirmasi Password</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="password" id="password_2" class="form-control"  placeholder="Konfirmasi Password *" name="passconf" required <?php echo $disable; ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-8 offset-sm-2">
                                    
                                </div>
                                <div class="col-sm-8 offset-sm-2">
                                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">UBAH</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>