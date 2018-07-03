<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Infinity :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/plugins/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/backend/plugins/morrisjs/morris.min.css'); ?>" />
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/main.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/color_skins.css'); ?>">
</head>
<body class="theme-purple">

	<?php echo $header; ?>
	<?php echo $sidebar; ?>
	<?php echo $content; ?>
	<?php echo $footer; ?>

<!-- Jquery Core Js --> 
<script src="<?php echo base_url('assets/backend/bundles/libscripts.bundle.js'); ?>"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="<?php echo base_url('assets/backend/bundles/vendorscripts.bundle.js'); ?>"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="<?php echo base_url('assets/backend/bundles/morrisscripts.bundle.js'); ?>"></script><!-- Morris Plugin Js -->
<script src="<?php echo base_url('assets/backend/bundles/jvectormap.bundle.js'); ?>a"></script> <!-- JVectorMap Plugin Js -->
<script src="<?php echo base_url('assets/backend/bundles/knob.bundle.js'); ?>"></script> <!-- Jquery Knob-->

<script src="<?php echo base_url('assets/backend/bundles/mainscripts.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/backend/js/pages/widgets/infobox/infobox-1.js'); ?>"></script>
<script src="<?php echo base_url('assets/backend/js/pages/index.js'); ?>"></script>
</body>
</html>