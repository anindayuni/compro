<?php if ($sosmed['settings_maintenance'] == '1') {
    header('Status: 301 Moved Permanently', false, 301); 
    header('Location: '.base_url()); 
    exit(); 
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
<link rel="shortcut icon" href="<?= base_url('gambar/lib/favicon.ico'); ?>" type="image/x-icon" />
<link href="<?= base_url('assets/frontend/tools/style.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/frontend/tools/960.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="<?= base_url('assets/frontend/js/cufon-yui.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/js/Copse_400.font.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/js/Gabriola_400.font.js'); ?>"></script>
<script type="text/javascript">
	Cufon.replace('h1', {fontFamily: 'Copse', hover:true})
	Cufon.replace('p.info', {fontFamily: 'Gabriola', hover:true})
</script>
</head>
<body>
<div id="shim"></div>
<div id="content">
	<h1 class="logo"><span class="two" style="text-align: center;">Ooops, Maaf...!</span></h1>
	<p class="info">Situs ini Sedang Dalam Perbaikan<br/>
	</p>
</div>

</body>
</html>
