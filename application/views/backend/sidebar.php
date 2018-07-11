<?php 
$hal = $this->uri->segment('2');
$hal2 = $this->uri->segment('3');
?>

<aside id="leftsidebar" class="sidebar h_menu">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN</li>
                        <li <?php if ($hal == 'home'){echo "class='active open'";}  ?>>
                            <a href="<?php echo base_url('logincms/home') ?>"><i class="icon-home"></i><span>Dashboard </span></a>
                        </li>

                        <li <?php if ($hal == 'kategori'){echo "class='active open'";}  ?>>
                            <a href="<?php echo base_url('logincms/kategori'); ?>" class="menu-toggle"><i class="icon-grid"></i><span>Kategori</span></a>
                        </li>

                        <li <?php if ($hal == 'artikel'){echo "class='active open'";}  ?>>
                            <a href="<?php echo base_url('logincms/artikel'); ?>"><i class="icon-layers"></i><span>Artikel</span></a>
                        </li>

                        <li <?php if ($hal == 'static_page' AND $hal2 != 'contact_us'){echo "class='active open'";}  ?>>
                            <a href="<?php echo base_url('logincms/static_page'); ?>"><i class="icon-doc"></i><span>Static</span></a>
                        </li>

                        <li <?php if ($hal == 'slider' OR $hal == 'gallery'){echo "class='active open'";}  ?>> <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="icon-picture"></i><span>Foto</span></a>
                            <ul class="ml-menu">
                                <li ><a href="<?php echo base_url('logincms/gallery'); ?>" class=" waves-effect waves-block">Gallery</a></li>
                                <li ><a href="<?php echo base_url('logincms/slider'); ?>">Slider</a></li>
                            </ul>
                        </li>

                        <li <?php if ($hal2 == 'contact_us'){echo "class='active open'";}  ?>>
                            <a href="<?php echo base_url('logincms/static_page/contact_us'); ?>" class="menu-toggle"><i class="icon-envelope"></i><span>Message</span></a>
                        </li>
                        
                        <li <?php if ($hal == 'settings'){echo "class='active open'";}  ?>>
                            <a href="<?php echo base_url('logincms/settings'); ?>" class="menu-toggle"><i class="icon-settings"></i><span>Setting</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <div class="slim_scroll">
        <div class="card">
            <h6>Skins</h6>
            <ul class="choose-skin list-unstyled">
                <li data-theme="purple" class="active">
                    <div class="purple"></div>
                </li>                   
                <li data-theme="blue">
                    <div class="blue"></div>
                </li>
                <li data-theme="cyan">
                    <div class="cyan"></div>
                </li>
                <li data-theme="green">
                    <div class="green"></div>
                </li>
                <li data-theme="orange">
                    <div class="orange"></div>
                </li>
                <li data-theme="blush">
                    <div class="blush"></div>
                </li>
            </ul>
        </div>
        <div class="card theme-light-dark">
            <h6>Left Menu</h6>
            <button class="btn btn-default btn-block btn-round btn-simple t-light">Light</button>
            <button class="btn btn-default btn-block btn-round t-dark">Dark</button>
        </div> 
        <div class="card">
            <h6>General Settings</h6>
            <ul class="setting-list list-unstyled">
                <li>
                    <div class="checkbox">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">Report Panel Usage</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">Email Redirect</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox3" type="checkbox" checked="">
                        <label for="checkbox3">Notifications</label>
                    </div>                        
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox4" type="checkbox" checked="">
                        <label for="checkbox4">Auto Updates</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox5" type="checkbox" checked="">
                        <label for="checkbox5">Offline</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox6" type="checkbox" checked="">
                        <label for="checkbox6">Location Permission</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>

 <!-- Main Content -->
<section class="content">
    <div class="container">