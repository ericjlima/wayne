<?php 
//$_SESSION['currentPage']='home';

?>
 	<link rel="stylesheet" type="text/css" href="styles/jquery.selectBox.css" />
	<link media="screen" rel="stylesheet" href="styles/colorbox.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
   	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript" ></script>
	<script type="text/javascript"> $1_9_1 =  $.noConflict();   </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.selectBox.min.js" type="text/javascript">   </script>
	<script src="js/jquery.colorbox-min.js" type="text/javascript">   </script>
	<script src="js/page-load.js" type="text/javascript">  </script>


		<div class="clear"></div>
		<div class="header_greenline"><img src="<?php echo IMAGE_HTTP_PATH ?>green-line1.png">
		
		<!--div class="slider"><img src="assets/img/slider.png"></div!-->
		
		<div id="wrapper">
 

        <div class="slider-wrapper theme-default">
            <div id="slider" class="slider">
                <img src="<?php echo IMAGE_HTTP_PATH ?>moisture-banner.png" alt="" title="#htmlcaption"></img>

             <!--    <img data-transition="boxRandom" src="<?php echo IMAGE_HTTP_PATH ?>slider.png" data-thumb="<?php echo IMAGE_HTTP_PATH ?>slider.png" alt="" title="#htmlcaption">
				<img data-transition="boxRandom" src="<?php echo IMAGE_HTTP_PATH ?>slider2.png" data-thumb="<?php echo IMAGE_HTTP_PATH ?>slider2.png" alt="" title="#htmlcaption">
                <img data-transition="boxRandom" src="<?php echo IMAGE_HTTP_PATH ?>slider3.png" data-thumb="<?php echo IMAGE_HTTP_PATH ?>slider3.png" alt="" data-transition="slideInLeft" title="#htmlcaption"/> -->
 

				
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <h1>It's the moisture<br>you can't see that<br> matters most.</h1> 
				<p>Protimeter Moisture Meters</p>
            </div>
			<!-- <span id="learnmore"><a href="<?php echo base_url('ExploreOxiIQ'); ?>"><img src="<?php echo IMAGE_HTTP_PATH ?>learn_more.png" style="display:block;"></a></span> -->

        </div>

    </div>
		<div class="content">
			<div class="content-box1" style="margin-top:-10px;"><img src="<?php echo IMAGE_HTTP_PATH ?>arrow.png" style="padding-right:15px;"><span>Protimeter offers a range of handheld instruments for the measurement of moisture, humidity and temperature in buildings, agricultural commodities and moisture in construction aggregates. Protimeter products are used for building survey, building flood damage restoration, flooring installation, agriculture and road construction.</span></div>
			<!-- <div class="dotted_line"><img src="<?php echo IMAGE_HTTP_PATH ?>dotted.png"></div> -->
			<div class="content-box2">

			</div>

				<div id="focusAreas" style="margin-top:-33px;">
						<div id="focusArea1">
							<a href="<?php echo base_url('MMS2'); ?>"><img src="<?php echo IMAGE_HTTP_PATH ?>home-photo-video.png" alt="MMS2 Video" style="margin-right:3px;"/></a>
						</div>
						<div id="focusArea2">
							<a href="<?php echo base_url('Surveymaster'); ?>" id="link_demo2"><img src="<?php echo IMAGE_HTTP_PATH ?>home-photo-demo.png" alt="MMS2 Demo" style="margin-right:3px;"/></a>
						</div>
						<div id="focusArea3">
							<a href="<?php echo base_url('Aquant'); ?>" ><img src="<?php echo IMAGE_HTTP_PATH ?>home-photo-meter.png" alt="" /></a>
						</div>
				</div>
		</div>

		
		<div style="display: none;">
		<div class="optionImage" id="link_video2Content" style="text-align: center;">
		  <iframe width="560" height="315" src="http://www.youtube.com/embed/kBpUd5Ijomw" frameborder="0" allowfullscreen></iframe>
		</div>
		</div>


       <script>

$1_9_1(function() {
    var slider = $1_9_1('#slider');
    slider.nivoSlider();
    var sliderdata = slider.data('nivoslider');
    var learn_links = [
        "./MMS2",
        "./Surveymaster",
        "./Aquant"
    ];
    $1_9_1('#learnmore').bind('click', function(ev) {
        ev.preventDefault();
        var info = sliderdata.current_image_info();
        location.href = learn_links[info.current_slide];
    });
});
			
</script> 