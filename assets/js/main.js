$(document).ready(function(){
		$("#tab1").click(function(){
			$("#tab1").addClass('tab-area-active');
			$("#tab2").removeClass('tab-area-active');
			$("#tab3").removeClass('tab-area-active');
			$("#tab4").removeClass('tab-area-active');
			$("#tabs-2").css("display", "none");
			$("#tab-arrow2").children('img').css("display", "none");
			$("#tabs-3").css("display", "none");
			$("#tab-arrow3").children('img').css("display", "none");
			$("#tabs-4").css("display", "none");
			$("#tab-arrow4").children('img').css("display", "none");
			$("#tabs-1").css("display", "block");
			$("#tab-arrow1").children('img').css({"display":"block", "padding-left":"46%"});
		});
		$("#tab2").click(function(){
			$("#tab2").addClass('tab-area-active');
			$("#tab1").removeClass('tab-area-active');
			$("#tab3").removeClass('tab-area-active');
			$("#tab4").removeClass('tab-area-active');
			$("#tabs-2").css("display", "none");
			$("#tabs-1").css("display", "none");
			$("#tab-arrow1").children('img').css("display", "none");
			$("#tabs-3").css("display", "none");
			$("#tab-arrow3").children('img').css("display", "none");
			$("#tabs-4").css("display", "none");
			$("#tab-arrow4").children('img').css("display", "none");
			$("#tabs-2").css("display", "block");
			$("#tab-arrow2").children('img').css({"display":"block", "padding-left":"46%"});
			
			});
		$("#tab3").click(function(){
			$("#tab3").addClass("tab-area-active");
			$("#tab2").removeClass("tab-area-active");
			$("#tab1").removeClass("tab-area-active");
			$("#tab4").removeClass('tab-area-active');
			$("#tabs-2").css("display", "none");
			$("#tabs-1").css("display", "none");
			$("#tab-arrow1").children('img').css("display", "none");
			$("#tabs-2").css("display", "none");
			$("#tab-arrow2").children('img').css("display", "none");
			$("#tabs-4").css("display", "none");
			$("#tab-arrow4").children('img').css("display", "none");
			$("#tabs-3").css("display", "block");
			$("#tab-arrow3").children('img').css({"display":"block", "padding-left":"46%"});
		});
		$("#tab4").click(function(){
			$("#tab4").addClass("tab-area-active");
			$("#tab3").removeClass("tab-area-active");
			$("#tab2").removeClass("tab-area-active");
			$("#tab1").removeClass("tab-area-active");
			$("#tabs-2").css("display", "none");
			$("#tabs-1").css("display", "none");
			$("#tab-arrow1").children('img').css("display", "none");
			$("#tabs-2").css("display", "none");
			$("#tab-arrow2").children('img').css("display", "none");
			$("#tabs-3").css("display", "none");
			$("#tab-arrow3").children('img').css("display", "none");
			$("#tabs-4").css("display", "block");
			$("#tab-arrow4").children('img').css({"display":"block", "padding-left":"46%"});
		});
		
		$("#subnav").hover(function()
			{
			var X=$(this).attr('id');
			if(X==1)
			{
				$(".submenu").hide();
				$(this).attr('id', '0');	
			}
			else
			{

				$(".submenu").show();
				$(this).attr('id', '1');
			}
				
			});
		
		$("#flip-dew-iq").click(function()
			{
				$("#flip-dew").css("display","block");
				$("#flip-oxi").css("display","none");
				$("#img-rt-dew").css("display","none");
				$("#img-dwn-dew").css("display","inline");
				$("#img-dwn-iq").css("display","none");
				$("#img-rt-iq").css("display","inline");
			});
		
		$("#flip-oxi-iq").click(function()
			{
				$("#flip-oxi").css("display","block");
				$("#flip-dew").css("display","none");
				$("#img-rt-dew").css("display","inline");
				$("#img-dwn-dew").css("display","none");
				$("#img-dwn-iq").css("display","inline");
				$("#img-rt-iq").css("display","none");
			});
 });