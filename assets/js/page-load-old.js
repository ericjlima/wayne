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