<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Infinity :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="<?php echo base_url('assets/logincms/plugins/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/logincms/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/logincms/plugins/morrisjs/morris.min.css'); ?>" />
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo base_url('assets/logincms/css/main.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/logincms/css/color_skins.css'); ?>">
</head>
<body class="theme-purple">

	<?php echo $header; ?>
	<?php echo $sidebar; ?>
	<?php echo $content; ?>
	<?php echo $footer; ?>

<!-- Jquery Core Js --> 
<script src="<?php echo base_url('assets/logincms/bundles/libscripts.bundle.js'); ?>"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="<?php echo base_url('assets/logincms/bundles/vendorscripts.bundle.js'); ?>"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="<?php echo base_url('assets/logincms/bundles/morrisscripts.bundle.js'); ?>"></script><!-- Morris Plugin Js -->
<script src="<?php echo base_url('assets/logincms/bundles/jvectormap.bundle.js'); ?>a"></script> <!-- JVectorMap Plugin Js -->
<script src="<?php echo base_url('assets/logincms/bundles/knob.bundle.js'); ?>"></script> <!-- Jquery Knob-->

<script src="<?php echo base_url('assets/logincms/bundles/mainscripts.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/logincms/js/pages/widgets/infobox/infobox-1.js'); ?>"></script>
<script src="<?php echo base_url('assets/logincms/js/pages/index.js'); ?>"></script>
</body>
</html>