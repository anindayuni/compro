 <!-- Page Loader -->
<div class="page-loader-wrapper">   
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="<?php echo base_url('assets/backend/images/logo.svg'); ?>" width="48" height="48" alt="sQuare"></div>
        <p>Please wait...</p>        
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
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/backend/images/logo.svg'); ?>" width="30" alt="infinity"><span class="m-l-10">infinity</span></a>
                </div>
                <ul class="nav navbar-nav">
                    <!-- <li class="search_bar hidden-xs">
                        <div class="input-group">                
                            <input type="text" class="form-control" placeholder="Find your stuff...">
                        </div>
                    </li> -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <!-- <img class="rounded-circle" src="<?php echo base_url('assets/backend/images/profile_av.jpg'); ?>" alt="User"> -->
                            User <i class="icon-user"></i>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li>
                                <div class="user-info">
                                    <h6 class="user-name m-b-0">Admin</h6>
                                </div>
                            </li>
                            <hr>
                            <li><a href="#"><i class="icon-key m-r-10"></i> <span>Ubah Password</span></a></li>
                            <hr>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('logincms/login/logout'); ?>" >Logout <i class="icon-logout"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar"><i class="icon-equalizer"></i></a></li>
                </ul>
            </div>
        </div>        
    </div>
</nav>

