<?php
$currentFile=$_SERVER["PHP_SELF"];
$part=explode('/',$currentFile);
//$fileName=$part[2]; 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php 
if($_SESSION['currentPage']=='home'){?>
<title>MMS2 | Surveymaster | Aquant | GE Protimeter Moisture Measurement</title>
<meta name="description" content="When cleaning and restoring a property after water damage, undetected moisture is a big problem. Selecting the right moisture meter makes all the difference.">
<meta name="keywords" content="Protimeter, Surveymaster, Aquant, moisture meter, hygrometer, moisture measurement, moisture transmitter">
<?php } ?>
<?php
if($_SESSION['currentPage']=='contact'){?>
<title>GE Protimeter | MMS2 | Surveymaster | Aquant | Sales Contact</title>
<meta name="description" content="Contact Sales for assistance or information on the GE Protimeter Moisture Meter Series: Protimeter MMS2, Surveymaster and Aquant moisture meters.">
<meta name="keywords" content="protimeter aquant contact, protimeter surveymaster, protimeter mms2, protimeter moisture measurement information, moisture measurement sales information, contact us, contact sales, inquire for more information, contact">
<?php } ?>
<?php
if($_SESSION['currentPage']=='mms2'){?>
<title>GE Protimeter MMS2 | Moisture Meter | All in One Moisture Meter</title>
<meta name="description" content="The Protimeter MMS2 is the most advanced all-in-one moisture meter. One-handed operation to measure moisture on and below the surface as well as air humidity.">
<meta name="keywords" content="ge protimeter mms2, mms2, ge moisture measurement, ge moisture meter, ge moisture meters, moisture analyzer, surface moisture measurement, below the surface moisture measurement, handheld moisture meter">
<?php } ?>
<?php
if($_SESSION['currentPage']=='surveymaster'){?>
<title>Protimeter Surveymaster | Measure Surface & Sub-Surface Moisture</title>
<meta name="description" content="The right dual function moisture meter makes all the difference! GE Protimeter Surveymaster assesses moisture levels and diagnoses moisture-related problems.">
<meta name="keywords" content="ge protimeter surveymaster, dual function moisture meter, surface sub-surface moisture measurement, ge surveymaster, survey master, ge surveymaster manual">
<?php } ?>
<?php
if($_SESSION['currentPage']=='aquant'){?>
<title>Protimeter Aquant | RF Moisture Meter | Locate Moisture Quickly</title>
<meta name="description" content="The Protimeter Aquant the sister product to the Surveymaster, helps you locate moisture quickly, up to ¾” below and behind a wide range of surfaces.">
<meta name="keywords" content="protimeter aquant, ge protimeter aquant, rf moisture meter, moisture measurement, moisture meter, non-invasive moisture measurement, non-invasive moisture meter">
<?php } ?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP_PATH ?>style.css"  media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP_PATH ?>themes/default.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP_PATH ?>themes/dark.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP_PATH ?>themes/bar.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP_PATH ?>themes/nivo-slider.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP_PATH ?>themes/demo/style.css" media="screen"/>
<script src="<?php echo JS_HTTP_PATH?>jquery-1.9.1.js"></script>
<script src="<?php echo JS_HTTP_PATH?>main.js"></script>
<script src="<?php echo JS_HTTP_PATH?>jquery.nivo.slider.js"></script>
<script src="<?php echo JS_HTTP_PATH?>jquery-1.9.0.min.js"></script>
<script src="<?php echo JS_HTTP_PATH?>jquery.nivo.slider.pack.js"></script>
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
				<div class="logo"><a href="http://www.ge-mcs.com/"target=_blank><img src="<?php echo IMAGE_HTTP_PATH ?>logo.png" style="top:3px; position:relative;"></a></div>
			</div>
			<div class="header-right">
				<div class="social">
					
					<span><a href="http://www.youtube.com/user/GESensingInspection"  target=_blank><img src="<?php echo IMAGE_HTTP_PATH ?>youtube.png"></a></span>
					<span><a href="https://twitter.com/ge_og_mc"  target=_blank><img src="<?php echo IMAGE_HTTP_PATH ?>twitter.png"></a></span>
					<span><a href="https://www.facebook.com/protimeter"  target=_blank><img src="<?php echo IMAGE_HTTP_PATH ?>facebook.png"></a></span>
					<span><a href="http://www.ge-mcs.com/"  target=_blank><img style="padding-top:4px; padding-right: 10px;" src="<?php echo IMAGE_HTTP_PATH ?>ge-mcs.png"></a></span>
				</div>
				<div class="menu">
					<div class="nav" id="subnav">
						<a class="account" ><span class="explor">Products</span></a>
						<div class="submenu" style="display: none; ">
							<ul class="root">
								<li><a href="<?php echo base_url('MMS2'); ?>">MMS2</a></li>
								<li> <a href="<?php echo base_url('Surveymaster'); ?>">Surveymaster</a></li>
								<li> <a href="<?php echo base_url('Aquant'); ?>">Aquant</a></li>
								<li> <a href="http://www.ge-mcs.com/en/moisture-and-humidity/moisture-meters.html">Other GE Moisture Meters</a></li>
							</ul>
						</div>
					</div>
					<div class="nav"><a href="<?php echo base_url('ContactUs'); ?>" style="left:2px; position:relative;">Contact Us</a></div>
					<div class="nav"><a href="<?php echo base_url(); ?>">Home</a></div>
				</div>	
			</div>
		</div>