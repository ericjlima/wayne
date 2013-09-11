$(document).ready(function(){
	
	/* drop down menus */
	$("#mms2Btn").hover(
		 function(){
		 	$("#dropDownMenu").show();
		}, 
		 function(){
			$("#dropDownMenu").hide();
		}
	);
	
	$(".wideSelect").selectBox();
	$(".shortSelect").selectBox();
	
	$("#mmsInstrumentLink").colorbox({width:"370px", height:"480px", inline:true, href:"#mmsInstrumentContent", speed:350, opacity:0.65});
	$("#quickStickLink").colorbox({width:"370px", height:"480px", inline:true, href:"#quickStickContent", speed:350, opacity:0.65});
	$("#hygrostickLink").colorbox({width:"400px", height:"480px", inline:true, href:"#hygrostickContent", speed:350, opacity:0.65});
	$("#hdHammerLink").colorbox({width:"470px", height:"320px", inline:true, href:"#hdHammerContent", speed:350, opacity:0.65});
	$("#4HammerLink").colorbox({width:"470px", height:"380px", inline:true, href:"#4HammerContent", speed:350, opacity:0.65});
	$("#mcProbeLink").colorbox({width:"470px", height:"360px", inline:true, href:"#mcProbeContent", speed:350, opacity:0.65});
	$("#deepWallLink").colorbox({width:"470px", height:"380px", inline:true, href:"#deepWallContent", speed:350, opacity:0.65});
	$("#deepWallLink2").colorbox({width:"470px", height:"380px", inline:true, href:"#deepWallContent2", speed:350, opacity:0.65});
	$("#calCheckLink").colorbox({width:"470px", height:"380px", inline:true, href:"#calCheckContent", speed:350, opacity:0.65});
	$(".softPouchLink").colorbox({width:"470px", height:"420px", inline:true, href:"#softPouchContent", speed:350, opacity:0.65});
	$(".hardCaseLink").colorbox({width:"470px", height:"420px", inline:true, href:"#hardCaseContent", speed:350, opacity:0.65});
	$("#softwareCableLink").colorbox({width:"470px", height:"420px", inline:true, href:"#softwareCableContent", speed:350, opacity:0.65});
	$("#hygroQuickLink").colorbox({width:"470px", height:"420px", inline:true, href:"#hygroQuickContent", speed:350, opacity:0.65});
	$("#surfTempLink").colorbox({width:"470px", height:"420px", inline:true, href:"#surfTempContent", speed:350, opacity:0.65});
	

	$("#surveymasterInstrumentLink").colorbox({width:"370px", height:"480px", inline:true, href:"#surveymasterInstrumentContent", speed:350, opacity:0.65});
	$("#softpouchLink").colorbox({width:"370px", height:"480px", inline:true, href:"#softpouchContent", speed:350, opacity:0.65});
	$("#hdhammerLink").colorbox({width:"370px", height:"280px", inline:true, href:"#hdhammerContent", speed:350, opacity:0.65});
	$("#10packhammerpinsLink").colorbox({width:"370px", height:"380px", inline:true, href:"#10packhammerpinsContent", speed:350, opacity:0.65});
	$("#hdmcprobeLink").colorbox({width:"370px", height:"280px", inline:true, href:"#hdmcprobeContent", speed:350, opacity:0.65});
	$("#deepwallprobes5Link").colorbox({width:"370px", height:"380px", inline:true, href:"#deepwallprobes5Content", speed:350, opacity:0.65});
	$("#pincalibrationcheckLink").colorbox({width:"370px", height:"280px", inline:true, href:"#pincalibrationcheckContent", speed:350, opacity:0.65});
	$("#instructionsLink").colorbox({width:"370px", height:"480px", inline:true, href:"#instructionsContent", speed:350, opacity:0.65});
	$("#woodcalibrationLink").colorbox({width:"370px", height:"480px", inline:true, href:"#woodcalibrationContent", speed:350, opacity:0.65});
	$("#deepwallprobes9Link").colorbox({width:"370px", height:"380px", inline:true, href:"#deepwallprobes9Content", speed:350, opacity:0.65});
	$("#standardhammerLink").colorbox({width:"370px", height:"380px", inline:true, href:"#standardhammerContent", speed:350, opacity:0.65});
	$("#eifsprobeLink").colorbox({width:"370px", height:"400px", inline:true, href:"#eifsprobeContent", speed:350, opacity:0.65});
	$("#eifsprobleneedles4packLink").colorbox({width:"370px", height:"380px", inline:true, href:"#eifsprobleneedles4packContent", speed:350, opacity:0.65});


	$("#bld5364standardsupplyLink").colorbox({width:"370px", height:"480px", inline:true, href:"#bld5364standardsupplyContent", speed:350, opacity:0.65});
	$("#optionalaccessoriesLink").colorbox({width:"370px", height:"480px", inline:true, href:"#optionalaccessoriesContent", speed:350, opacity:0.65});
	$("#bld5905technicianskitLink").colorbox({width:"370px", height:"380px", inline:true, href:"#bld5905technicianskitContent", speed:350, opacity:0.65});

	$("#link_video2Link").colorbox({width:"640px", height:"400px", inline:true, href:"#link_video2Content", speed:350, opacity:0.65});

	$("#mmsspecificationsLink").colorbox({width:"1060px", height:"730px", inline:true, href:"#mmsspecificationsContent", speed:350, opacity:0.65});
	$("#surveymasterspecificationsLink").colorbox({width:"1080px", height:"480px", inline:true, href:"#surveymasterspecificationsContent", speed:350, opacity:0.65});
	$("#surveymastervidLink").colorbox({width:"640px", height:"400px", inline:true, href:"#surveymastervidContent", speed:350, opacity:0.65});
	$("#mms2vidLink").colorbox({width:"640px", height:"400px", inline:true, href:"#mms2vidContent", speed:350, opacity:0.65});
	$("#aquantvidLink").colorbox({width:"640px", height:"400px", inline:true, href:"#aquantvidContent", speed:350, opacity:0.65});


});

var counter = "a";
function rotateHome()
{
	if(counter=="a") {
		document.getElementById("rotate1").style.display = "none";
		$("#rotate2").fadeIn("1000");
		counter = "b";
	} else {
		document.getElementById("rotate2").style.display = "none";
		$("#rotate1").fadeIn("1000");
		counter = "a";
	}
}