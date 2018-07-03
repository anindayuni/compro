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
                    <li class="search_bar hidden-xs">
                        <div class="input-group">                
                            <input type="text" class="form-control" placeholder="Find your stuff...">
                        </div>
                    </li>
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img class="rounded-circle" src="<?php echo base_url('assets/backend/images/profile_av.jpg'); ?>" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li>
                                <div class="user-info">
                                    <h6 class="user-name m-b-0">Alizee Thomas</h6>
                                    <p class="user-position">Available</p>
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                    <a title="linkedin" href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a>
                                    <a title="dribbble" href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a>
                                    <a title="google plus" href="javascript:void(0);"><i class="zmdi zmdi-google-plus-box"></i></a>
                                </div>
                            </li>
                            <hr>
                            <li><a href="profile.html"><i class="icon-user m-r-10"></i> <span>My Profile</span> <span class="badge badge-success float-right">80%</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-notebook m-r-10"></i><span>Taskboard</span> <span class="badge badge-info float-right">New</span></a></li>
                            <hr>
                            <li><a href="locked.html"><i class="icon-lock m-r-10"></i><span>Locked</span></a></li>
                            <li><a href="sign-in.html"><i class="icon-power m-r-10"></i><span>Sign Out</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar"><i class="icon-equalizer"></i></a></li>
                </ul>
            </div>
        </div>        
    </div>
</nav>

