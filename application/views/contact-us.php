<?php 
//$_SESSION['currentPage']='contact';

?>
<html>


	
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">	</script>
	<script>
		function chkForm(){
		    var x = $('#firstName').val();
		    if (x === '')
	        {
                alert("First name must be filled out");
           	    $('#firstName').focus();
                return false;
	        }
	    	var x = $('#lastName').val();
		    if (x === '')
	        {
                alert("Last name must be filled out");
           	    $('#lastName').focus();
                return false;
	        }

    	var x = $('#email').val();
        var atpos=x.indexOf("@");
        var dotpos=x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	        {
                alert("Not a valid e-mail address");
           	    $('#email').focus();
                return false;
	        }

	    	var x = $('#company').val();
		    if (x === '')
	        {
                alert("Company must be filled out");
           	    $('#company').focus();
                return false;
	        }

			var x = $('#country').val();
		    if (x === '')
	        {
                alert("Country must be filled out");
           	    $('#country').focus();
                return false;
	        }

		    var x = $('#state').val();
		    if (x === '')
	        {
                alert("State must be filled out");
           	    $('#state').focus();
                return false;
	        }
			
			var x = $('#preferredMethod').val();
		    if (x === '')
	        {
                alert("Preferred Method of Contact must be filled out");
           	    $('#preferredMethod').focus();
                return false;
	        }
			
			var x = $('#city').val();
		    if (x === '')
	        {
                alert("City must be filled out");
           	    $('#city').focus();
                return false;
	        }

		    var x = $('#zip').val();
		    if (x === '')
	        {
                alert("Zip must be filled out");
           	    $('#zip').focus();
                return false;
	        }

		    var x = $('#message').val();
		    if (x === '')
	        {
                alert("Details must be filled out");
           	    $('#message').focus();
                return false;
	        }
		}
</script>
<body>
 
 
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="header_greenline"><img src="<?php echo IMAGE_HTTP_PATH ?>green-line1.png"></div>
        
        <div class="contact-container">
        
 		<h1>Contact Us</h1>
 
        <?php
        $this->load->helper("form");
 
        echo (!empty($message)) ? $message : '';
 
        echo validation_errors();
		
		echo ("<div class='column1'>");
 
        echo form_open("home/send_email", 'class="formOne" name="formOne"');
 
        echo form_label("First Name<span>*</span> <br />", "firstName");
 
        $data = array(
                "name" => "firstName",
                "id" => "firstName",
                "value" => ""
                );
     
    echo form_input($data);

	echo form_label("<br />Last Name<span>*</span> <br />", "lastName");

	$data = array(
		"name" => "lastName",
		"id" => "lastName",
		"value" => ""
		); 

	echo form_input($data);



	echo form_label("<br />E-mail<span>*</span> <br />", "email");

	$data = array(
		"name" => "email",
		"id" => "email",
		"value" => ""
		); 

	echo form_input($data);

	echo form_label("<br />Phone <br />", "phone");

	$data = array(
		"name" => "phone",
		"id" => "phone",
		"value" => ""
		); 

	echo form_input($data);


	//preferred contact method

	echo form_label("<br />Preferred Contact Method<span>*</span> <br />", "country");
	$preferred = array( "" => "Choose", "email" => "E-mail", "phone" => "Phone" );


	echo form_dropdown('preferred', $preferred, '', 'id="preferredMethod"');
	
	echo ("</div>");
	
	echo ("<div class='column2'>");

	echo form_label("Company<span>*</span> <br />", "company");

	$data = array(
		"name" => "company",
		"id" => "company",
		"value" => ""
		); 

	echo form_input($data);

	echo form_label("<br />Street Address 1 <br />", "streetAddress1");

	$data = array(
		"name" => "streetAddress1",
		"id" => "streetAddress1",
		"value" => ""
		); 

	echo form_input($data);

	echo form_label("<br />Street Address 2 <br />", "streetAddress2");

	$data = array(
		"name" => "streetAddress2",
		"id" => "streetAddress2",
		"value" => ""
		); 

	echo form_input($data);

	echo form_label("<br />City<span>*</span> <br />", "city");

	$data = array(
		"name" => "city",
		"id" => "city",
		"value" => ""
		); 

	echo form_input($data);

	//Country


	echo form_label("<br />Country<span>*</span> <br />", "country");
	$country = array( "" => "Select the Country", "US" => "United States", "AF" => "Afghanistan", "AX" => "Aland Islands", "AL" => "Albania", "DZ" => "Algeria", "AS" => "American Samoa", "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla", "AG" => "Antigua And Barbuda", "AR" => "Argentina", "AM" => "Armenia", "AW" => "Aruba", "AU" => "Australia", "AT" => "Austria", "AZ" => "Azerbaijan", "BS" => "Bahamas", "BH" => "Bahrain", "BD" => "Bangladesh", "BB" => "Barbados", "BY" => "Belarus", "BE" => "Belgium", "BZ" => "Belize", "BJ" => "Benin", "BM" => "Bermuda", "BT" => "Bhutan", "BO" => "Bolivia", "BA" => "Bosnia and Herzegowina", "BW" => "Botswana", "BV" => "Bouvet Island", "BR" => "Brazil", "BAT" => "British Antarctic Territory", "IO" => "British Indian Ocean Territory", "BN" => "Brunei Darussalam", "BG" => "Bulgaria", "BF" => "Burkina Faso", "BI" => "Burundi", "KH" => "Cambodia", "CM" => "Cameroon", "CA" => "Canada", "CEI" => "Canton & Enderbury I", "CV" => "Cape Verde", "KY" => "Cayman Islands", "CF" => "Central African Republic", "TD" => "Chad", "CL" => "Chile", "CN" => "China", "CX" => "Christmas Island", "CC" => "Cocos (Keeling) Islands", "CO" => "Colombia", "KM" => "Comoros", "CD" => "Congo, The Democratic Republic Of The", "CK" => "Cook Islands", "CR" => "Costa Rica", "CI" => "Cote D'ivoire", "HR" => "Croatia", "CY" => "Cyprus", "CZ" => "Czech Republic", "DK" => "Denmark", "DJ" => "Djibouti", "DM" => "Dominica", "DO" => "Dominican Republic", "DML" => "Dronning Maud Land", "EC" => "Ecuador", "EG" => "Egypt", "SV" => "El Salvador", "GQ" => "Equatorial Guinea", "ER" => "Eritrea", "EE" => "Estonia", "ET" => "Ethiopia", "FK" => "Falkland Islands (Malvinas)", "FO" => "Faroe Islands", "FJ" => "Fiji", "FI" => "Finland", "FR" => "France", "GF" => "French Guiana", "PF" => "French Polynesia", "TF" => "French Southern Territories", "GA" => "Gabon", "GM" => "Gambia", "GE" => "Georgia", "DE" => "Germany", "GH" => "Ghana", "GI" => "Gibraltar", "GIL" => "Gilbert Islands", "GR" => "Greece", "GL" => "Greenland", "GD" => "Grenada", "GP" => "Guadeloupe", "GU" => "Guam", "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea", "GW" => "Guinea-Bissau", "GY" => "Guyana", "HT" => "Haiti", "HM" => "Heard And McDonald Islands", "HN" => "Honduras", "HK" => "Hong Kong", "HU" => "Hungary", "IS" => "Iceland", "IN" => "India", "ID" => "Indonesia", "IQ" => "Iraq", "IE" => "Ireland", "IM" => "Isle Of Man", "IL" => "Israel", "IT" => "Italy", "JM" => "Jamaica", "JP" => "Japan", "JE" => "Jersey", "JIL" => "Johnston Island", "JO" => "Jordan", "KZ" => "Kazakhstan", "KE" => "Kenya", "KI" => "Kiribati", "KW" => "Kuwait", "KG" => "Kyrgyzstan", "LA" => "Lao People's Democratic Republic", "LV" => "Latvia", "LB" => "Lebanon", "LS" => "Lesotho", "LR" => "Liberia", "LY" => "Libyan Arab Jamahiriya", "LI" => "Liechtenstein", "LT" => "Lithuania", "LU" => "Luxembourg", "MO" => "Macau", "MK" => "Macedonia", "MG" => "Madagascar", "MW" => "Malawi", "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands", "MQ" => "Martinique", "MR" => "Mauritania", "MU" => "Mauritius", "MX" => "Mexico", "FM" => "Micronesia", "MIL" => "Midway Islands", "MD" => "Moldova", "MC" => "Monaco", "MN" => "Mongolia", "ME" => "Montenegro", "MS" => "Montserrat", "MA" => "Morocco", "MZ" => "Mozambique", "NA" => "Namibia", "NR" => "Nauru", "NP" => "Nepal", "NL" => "Netherlands", "AN" => "Netherlands Antilles", "NC" => "New Caledonia", "HEB" => "New Hebrides", "NZ" => "New Zealand", "NI" => "Nicaragua", "NE" => "Niger", "NG" => "Nigeria", "NF" => "Norfolk Island", "MP" => "Northern Mariana Islands", "NO" => "Norway", "OM" => "Oman", "PAC" => "Pacific Islands", "PK" => "Pakistan", "PW" => "Palau", "PS" => "Palestinian Territory, Occupied", "PA" => "Panama", "PG" => "Papua New Guinea", "PY" => "Paraguay", "PE" => "Peru", "PH" => "Philippines", "PN" => "Pitcairn", "PL" => "Poland", "PT" => "Portugal", "PR" => "Puerto Rico", "QA" => "Qatar", "RE" => "Reunion", "RO" => "Romania", "RU" => "Russia", "RW" => "Rwanda", "BL" => "Saint Barthelemy", "KN" => "Saint Kitts And Nevis", "LC" => "Saint Lucia", "MF" => "Saint Martin (French Portion)", "VC" => "Saint Vincent And The Grenadines", "SAI" => "Saipan", "WS" => "Samoa", "SM" => "San Marino", "ST" => "Sao Tome And Principe", "SA" => "Saudi Arabia", "SD" => "Scotland", "SN" => "Senegal", "RS" => "Serbia (Republic Of Serbia)", "SC" => "Seychelles", "SL" => "Sierra Leone", "SG" => "Singapore", "SK" => "Slovakia", "SI" => "Slovenia", "SB" => "Solomon Islands", "SO" => "Somalia", "SOU" => "Sou", "ZA" => "South Africa", "GS" => "South Georgia And The South Sandwich Islands", "ROK" => "South Korea", "SRH" => "Southern Rhodesia", "ES" => "Spain", "LK" => "Sri Lanka", "SH" => "St. Helena", "PM" => "St. Pierre And Miquelon", "SR" => "Suriname", "SJ" => "Svalbard And Jan Mayen Islands", "SZ" => "Swaziland", "CH" => "Switzerland", "TW" => "Taiwan", "TJ" => "Tajikistan", "TZ" => "Tanzania, United Republic", "TH" => "Thailand", "TL" => "Timor-Leste", "TG" => "Togo", "TK" => "Tokelau", "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TN" => "Tunisia", "TR" => "Turkey", "TM" => "Turkmenistan", "TC" => "Turks And Caicos Islands", "TV" => "Tuvalu", "UG" => "Uganda", "UA" => "Ukraine", "AE" => "United Arab Emirates", "GB" => "United Kingdom", "UY" => "Uruguay", "UZ" => "Uzbekistan", "VU" => "Vanuatu", "VE" => "Venezuela", "VN" => "Vietnam", "VG" => "Virgin Islands (British)", "WIL" => "Wake Island", "WF" => "Wallis And Futuna Islands", "WIN" => "West Indies", "EH" => "Western Sahara", "YE" => "Yemen", "YUG" => "Yugoslavia", "ZAR" => "Zaire", "ZM" => "Zambia", "ZW" => "Zimbabwe" );

	echo form_dropdown('country', $country, '', 'id="country"');


	//state
	
	echo ("<div class='state-zip'>");
	
	echo ("<div class='state'>");
	
	echo form_label("State<span>*</span> <br />", "state");
	$state = array( ""=>"State");

	echo form_dropdown('state', $state, '', 'id="state"');
	
	echo ("</div>");
	
	echo ("<div class='zip'>");

	echo form_label("Zip Code<span>*</span> <br />", "zip");

	$data = array(
		"name" => "zip",
		"id" => "zip",
		"value" => ""
		); 

	echo form_input($data);
	
	echo ("</div>");
	
	echo ("</div>");
	
	echo ("</div>");
	
	echo ("<div class='column3'>");

	echo form_label("<br />Please give us the details so we can assist you as best as possible:<span>*</span> <br />", "message");

	$data = array(
		"name" => "message",
		"id" => "message",
		"value" => ""
		); 

	echo form_textarea($data);

	echo form_label("<br />");

	echo form_submit("contactSubmit", "Submit", 'onclick="return chkForm();" id="submit-btn"');
	
	echo ("<br /><br />");

	echo form_close();
	
	echo ("</div>");

	?>

				<div id="callsToAction">
				
				<strong>North and South America</strong>
				<br /><br />
				GE Measurement &amp; Control
				<br />
				967 Windfall Rd
				<br />
				St. Mary's PA 15857
				<br />
				Email: StMarysCC@ge.com
				<br />
				Tel 1: 814-834-9140
				<br /><br /> 
				<strong>Europe, Middle East and Asia</strong>
				<br /><br />
				GE Measurement &amp; Control
				<br />
				Crown Industrial Estate
                <br />
				Priorswood Road
				<br />
				Taunton
				<br />
				TA2 8QY
				<br />
				UK
				<br />
				<br />
				General Electric company
				<br />
				Tel: +44.1823.335.200
				<br />
				e-mail: taunton.cc@ge.com
			</div>
			
    </div>
</body>

<script type="text/javascript">
$(document).ready(function () { 
        $("#country").change( function(){
                //alert( $(this).val());
				
                var countrythis = $(this).val()


                if ( countrythis == "US"){
                        $("#state").html( "");
                        var states = {AL: "Alabama", AK: "Alaska", AZ: "Arizona", AR: "Arkansas", CA: "California", CO: "Colorado", CT: "Connecticut", DE: "Delaware", DC: "District Of Columbia", FL: "Florida", GA: "Georgia", HI: "Hawaii", ID: "Idaho", IL: "Illinois", IN: "Indiana", IA: "Iowa", KS: "Kansas", KY: "Kentucky", LA: "Louisiana", ME: "Maine", MD: "Maryland", MA: "Massachusetts", MI: "Michigan", MN: "Minnesota", MS: "Mississippi", MO: "Missouri", MT: "Montana",NE: "Nebraska",NV: "Nevada",NH: "New Hampshire",NJ: "New Jersey",NM: "New Mexico",NY: "New York",NC: "North Carolina",ND: "North Dakota",OH: "Ohio", OK: "Oklahoma", OR: "Oregon", PA: "Pennsylvania", RI: "Rhode Island", SC: "South Carolina", SD: "South Dakota",TN: "Tennessee", TX: "Texas", UT: "Utah", VT: "Vermont", VA: "Virginia", WA: "Washington", WV: "West Virginia", WI: "Wisconsin", WY: "Wyoming"};
                        for(state in states){
                                $("#state").append( "<option value='" + states[state] + "'>" + states[state] + "</option>" );
                                }
                        }
                else if ( countrythis == "CA"){
                        $("#state").html( "");
                        var provinces = { AL: "Alberta", BC: "British Columbia", MN: "Manitoba", NB: "New Brunswick", NL: "Newfoundland and Labrador", NW: "Northwest Territories", NS: "Nova Scotia", NV: "Nunavut", ON: "Ontario", PEI: "Prince Edward Island", QB: "Quebec", SK: "Saskatchewan", YT: "Yukon Territory"};
                        for(province in provinces){
                                $("#state").append( "<option value='"+ provinces[province] + "'>" + provinces[province] + "</option>" );
                        }
                }
                else{
                        $("#state").html( "</option><option value='Other'>Other</option>" );
                }
        });
});
</script>
</html>