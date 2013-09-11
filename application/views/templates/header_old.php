<?php
$currentFile=$_SERVER["PHP_SELF"];
$part=explode('/',$currentFile);
$fileNmae=$part[2]; 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title>Home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/style.css"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/themes/default.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/themes/dark.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/themes/bar.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/themes/nivo-slider.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/themes/demo/style.css" media="screen"/>
<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-1.9.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" language="javascript">
 $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
</head>

<body>
	<div class="main">
		<div class="header">
			<div class="header-left">
				<div class="logo"><img src="<?php echo base_url(); ?>assets/img/logo.png"></div>
			</div>
			<div class="header-right">
				<div class="social">
					
					<span><img src="<?php echo base_url(); ?>assets/img/youtube.png"></span>
					<span><img src="<?php echo base_url(); ?>assets/img/twitter.png"></span>
					<span><img src="<?php echo base_url(); ?>assets/img/facebook.png"></span>
					<span><img style="padding-top:4px;" src="<?php echo base_url(); ?>assets/img/ge-mcs.png"></span>
				</div>
				<div class="menu">
					<div class="nav" id="subnav">
						<a class="account" ><span>Explore</span></a>
						<div class="submenu" style="display: none; ">
							<ul class="root">
								<li><a href="<?php echo base_url('home/expl_oxi_iq'); ?>">oxy.IQ</a></li>
								<li> <a href="<?php echo base_url('home/expl_dew_iq'); ?>">dew.IQ</a></li>
							</ul>
						</div>
					</div>
					<div class="nav"><a href="<?php //echo base_url(''); ?>">Contact Us</a></div>
					<div class="nav"><a href="<?php echo base_url('home'); ?>">Home</a></div>
				</div>	
			</div>
		</div>