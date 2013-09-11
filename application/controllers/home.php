<?php session_start(); if (!defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	
	function __construct(){
       parent::__construct();
	   //$this->load->helper('url');
	   $this->load->helper('download');
  }
	public function index()
	{
		$error =array();
		$data['errormessage']=NULL;
		
		$_SESSION['currentPage']='home';
		// $this->load->view("templates/header");
		$this->load->view("index",$data);
		// $this->load->view("templates/footer");

	}
	

	public function indexcdf6()
	{
		$error =array();
		$this->load->view("templates/header");
		$this->load->view("indexcdf6.html");
		$this->load->view("templates/footer");
	}	
	public function ContactUs()
	{
		$error =array();
		$data['errormessage']=NULL;
		$_SESSION['currentPage']='contact';
		$this->load->view("templates/header");
		$this->load->view("contact-us",$data);
		$this->load->view("templates/footer");
	}	


	public function ProtimeterMMSWebProductTour()
	{
		$error =array();
		$data['errormessage']=NULL;
		$this->load->view("templates/header");
		$this->load->view("Protimeter-MMS-Web-Product-Tour/index.php",$data);
		$this->load->view("templates/footer");
	}

	public function MMS2datasheetsandmanuals()
	{
		$error =array();
		$data['errormessage']=NULL;
		$this->load->view("templates/header");
		$this->load->view("downloads-and-manuals.php",$data);
		$this->load->view("templates/footer");
	}
	public function surveymasterdatasheetsandmanuals()
	{
		$error =array();
		$data['errormessage']=NULL;
		$this->load->view("templates/header");
		$this->load->view("downloads-and-manuals-surveymaster.php",$data);
		$this->load->view("templates/footer");
	}
	public function aquantdatasheetsandmanuals()
	{
		$error =array();
		$data['errormessage']=NULL;
		$this->load->view("templates/header");
		$this->load->view("downloads-and-manuals-aquant.php",$data);
		$this->load->view("templates/footer");
	}
public function asdf()
	{
		$error =array();
		$data['errormessage']=NULL;
		$this->load->view("templates/header");
		$this->load->view("asdf");
		$this->load->view("templates/footer");
	}

	public function MMS2()
	{
		$error =array();
		$data['errormessage']=NULL;
		$_SESSION['currentPage']='mms2';
		$this->load->view("templates/header");
		$this->load->view("mms2",$data);
		$this->load->view("templates/footer");
	}
	public function Surveymaster()
	{     	 //echo $_SERVER['DOCUMENT_ROOT']."grant/pplication/downloads/text.txt";	
		$error =array();
		$data['errormessage']=NULL;
		$_SESSION['currentPage']='surveymaster';
		$this->load->view("templates/header");
		$this->load->view("surveymaster",$data);
		$this->load->view("templates/footer");
	}	

	public function Aquant()
	{
		$error =array();
		$data['errormessage']=NULL;
		$_SESSION['currentPage']='aquant';
		$this->load->view("templates/header");
		$this->load->view("aquant",$data);
		$this->load->view("templates/footer");
	}
	function download()	{	 $data = file_get_contents(APPPATH."downloads/mms2datasheet.pdf"); 
	// One sheet for Dew
	$name = 'MMS2 Data Sheet.pdf';
	force_download($name, $data); 		
	}

	function download2()	{	 $data = file_get_contents(APPPATH."/downloads/Dew_IQ_datasheet.pdf"); 
	// Read the file's contents    
	$name = 'Dew_IQ_datasheet.pdf';
	force_download($name, $data); 		
	}

	function download3()	{	 $data = file_get_contents(APPPATH."/downloads/Oxy_IQ_Datasheet.pdf"); 
	// Read the file's contents
	$name = 'Oxy_IQ_Datasheet.pdf';
	force_download($name, $data); 		
	}
	
	function download4()	{	 $data = file_get_contents(APPPATH."/downloads/GE_Oxy_IQ_OneSheet_Hi.pdf"); 
	// One sheet for Oxy
	$name = 'GE_Oxy_IQ_OneSheet_Hi.pdf';
	force_download($name, $data); 		
	}
	
	function download5()	{	 $data = file_get_contents(APPPATH."/downloads/air_IQ_Datasheet.pdf"); 
	// air.IQ Moisture Analyzer Packaged Solutions
	$name = 'air_IQ_Datasheet.pdf';
	force_download($name, $data); 		



//MMS2 Datasheets and Manuals--------------------------------------------------------------------------------



	}
		function downloaddataeng()	{	 $data = file_get_contents(APPPATH."downloads/datasheets/MMS2_Datasheet_English.pdf"); 
	$name = 'MMS2_Datasheet_English.pdf';
	force_download($name, $data); 		
	}
			function downloaddatafre()	{	 $data = file_get_contents(APPPATH."downloads/datasheets/MMS2_Datasheet_French.pdf"); 
	$name = 'MMS2_Datasheet_French.pdf';
	force_download($name, $data); 		
	}
				function downloaddataspa()	{	 $data = file_get_contents(APPPATH."downloads/datasheets/MMS2_Datasheet_Spanish.pdf"); 
	$name = 'MMS2_Datasheet_Spanish.pdf';
	force_download($name, $data); 		
	}
				function downloaddatager()	{	 $data = file_get_contents(APPPATH."downloads/datasheets/MMS2_Datasheet_German.pdf"); 
	$name = 'MMS2_Datasheet_German.pdf';
	force_download($name, $data); 		
	}
				function downloaddatanor()	{	 $data = file_get_contents(APPPATH."downloads/datasheets/MMS2_Datasheet_Norwegian.pdf"); 
	$name = 'MMS2_Datasheet_Norwegian.pdf';
	force_download($name, $data); 		
	}
	function downloadmanueng()	{	 $data = file_get_contents(APPPATH."downloads/manuals/mms2/MMS2_Manual_English.pdf"); 
	$name = 'MMS2_Manual_English.pdf';
	force_download($name, $data); 		
	}
		function downloadmanufre()	{	 $data = file_get_contents(APPPATH."downloads/manuals/mms2/MMS2_Manual_French.pdf"); 
	$name = 'MMS2_Manual_French.pdf';
	force_download($name, $data); 		
	}
		function downloadmanuger()	{	 $data = file_get_contents(APPPATH."downloads/manuals/mms2/MMS2_Manual_German.pdf"); 
	$name = 'MMS2_Manual_German.pdf';
	force_download($name, $data); 		
	}
		function downloadmanunor()	{	 $data = file_get_contents(APPPATH."downloads/manuals/mms2/MMS2_Manual_Norwegian.pdf"); 
	$name = 'MMS2_Manual_Norwegian.pdf';
	force_download($name, $data); 		
	}
		function downloadmanuspa()	{	 $data = file_get_contents(APPPATH."downloads/manuals/mms2/MMS2_Manual_Spanish.pdf"); 
	$name = 'MMS2_Manual_Spanish.pdf';
	force_download($name, $data); 		
	}
	function downloadmanuswe()	{	 $data = file_get_contents(APPPATH."downloads/manuals/mms2/MMS2_Manual_Swedish.pdf"); 
		$name = 'MMS2_Manual_Swedish.pdf';
		force_download($name, $data); 		
	}



//Surveymaster Datasheets and Manuals--------------------------------------------------------------------------------


			function surveymasterdownloaddataeng()	{	 $data = file_get_contents(APPPATH."downloads/datasheets/Surveymaster_Datasheet_English.pdf"); 
	$name = 'Surveymaster_Datasheet_English.pdf';
	force_download($name, $data); 		
	}
	function surveymasterdownloadmanueng()	{	 $data = file_get_contents(APPPATH."downloads/manuals/surveymaster/Surveymaster_Manual_English.pdf"); 
	$name = 'Surveymaster_Manual_English.pdf';
	force_download($name, $data); 		
	}
		function surveymasterdownloadmanufre()	{	 $data = file_get_contents(APPPATH."downloads/manuals/surveymaster/Surveymaster_Manual_French.pdf"); 
	$name = 'Surveymaster_Manual_French.pdf';
	force_download($name, $data); 		
	}
		function surveymasterdownloadmanuger()	{	 $data = file_get_contents(APPPATH."downloads/manuals/surveymaster/Surveymaster_Manual_German.pdf"); 
	$name = 'Surveymaster_Manual_German.pdf';
	force_download($name, $data); 		
	}
			function surveymasterdownloadmanuita()	{	 $data = file_get_contents(APPPATH."downloads/manuals/surveymaster/Surveymaster_Manual_Italian.pdf"); 
	$name = 'Surveymaster_Manual_Italian.pdf';
	force_download($name, $data); 		
	}
		function surveymasterdownloadmanunor()	{	 $data = file_get_contents(APPPATH."downloads/manuals/surveymaster/Surveymaster_Manual_Norwegian.pdf"); 
	$name = 'Surveymaster_Manual_Norwegian.pdf';
	force_download($name, $data); 		
	}

	//Line 217 should be the line that is showing this Spanish PDF error. I trouble shooted the line by trying to simply replace the "Surveymaster_Manual_Spanish.pdf"
	//with another file such as "Surveymaster_Manual_Norweigian.pdf" and suddenly it works (but with the incorrect pdf file). This leaves me to believe it is a problem
	//with the file
		function surveymasterdownloadmanuspa()	{	 $data = file_get_contents(APPPATH."downloads/manuals/surveymaster/g.pdf"); //try changing the pdf here to something else
	$name = 'Surveymayser_Manual_Spanish.pdf';
	force_download($name, $data); 		
	}
	function surveymasterdownloadmanuswe()	{	 $data = file_get_contents(APPPATH."downloads/manuals/surveymaster/Surveymaster_Manual_Swedish.pdf"); 
		$name = 'Surveymaster_Manual_Swedish.pdf';
		force_download($name, $data); 		
	}



//Aquant Datasheets and Manuals--------------------------------------------------------------------------------


				function aquantdownloaddataeng()	{	 $data = file_get_contents(APPPATH."downloads/datasheets/Aquant_Datasheet_English.pdf"); 
	$name = 'Aquant_Datasheet_English.pdf';
	force_download($name, $data); 		
	}
	function aquantdownloadmanueng()	{	 $data = file_get_contents(APPPATH."downloads/manuals/aquant/Aquant_Manual_English.pdf"); 
	$name = 'Aquant_Manual_English.pdf';
	force_download($name, $data); 		
	} 
		function aquantdownloadmanufre()	{	 $data = file_get_contents(APPPATH."downloads/manuals/aquant/Aquant_Manual_French.pdf"); 
	$name = 'Aquant_Manual_French.pdf';
	force_download($name, $data); 		
	}
			function aquantdownloadmanuita()	{	 $data = file_get_contents(APPPATH."downloads/manuals/aquant/Aquant_Manual_Italian.pdf"); 
	$name = 'Aquant_Manual_Italian.pdf';
	force_download($name, $data); 		
	}
		function aquantdownloadmanunor()	{	 $data = file_get_contents(APPPATH."downloads/manuals/aquant/Aquant_Manual_Norwegian.pdf"); 
	$name = 'Aquant_Manual_Norwegian.pdf';
	force_download($name, $data); 		
	}
		function aquantdownloadmanuspa()	{	 $data = file_get_contents(APPPATH."downloads/manuals/aquant/Aquant_Manual_Spanish.pdf"); 
	$name = 'Aquant_Manual_Spanish.pdf';
	force_download($name, $data); 		
	}
		function aquantdownloadmanuswe()	{	 $data = file_get_contents(APPPATH."downloads/manuals/aquant/Aquant_Manual_Swedish.pdf"); 
	$name = 'Aquant_Manual_Swedish.pdf'; 
	force_download($name, $data); 		
	}
	function aquantdownloadmanuger()	{	 $data = file_get_contents(APPPATH."downloads/manuals/aquant/Aquant_Manual_German.pdf"); 
		$name = 'Aquant_Manual_German.pdf';
		force_download($name, $data); 		
	}


	public function send_email(){
		$this->load->library("form_validation");

		$this->form_validation->set_rules("firstName", "First Name", "required|alpha|xss_clean");
		$this->form_validation->set_rules("lastName", "Last Name", "required|alpha|xss_clean");
		$this->form_validation->set_rules("email", "Email Address", "required|valid_email|xss_clean");
		$this->form_validation->set_rules("phone", "Phone", "xss_clean");
		$this->form_validation->set_rules("company", "Company", "required|xss_clean");
		$this->form_validation->set_rules('country', 'Country', "required|xss_clean");
		$this->form_validation->set_rules('state', 'State', "required|xss_clean");
		$this->form_validation->set_rules('preferred', 'Preferred', "required|xss_clean");
		$this->form_validation->set_rules("streetAddress1", "Street Address 1", "xss_clean");
		$this->form_validation->set_rules("streetAddress2", "Street Address 2", "xss_clean");
		$this->form_validation->set_rules("city", "City", "required|xss_clean");
		$this->form_validation->set_rules("zip", "Zip Code", "required|trim|xss_clean");
		$this->form_validation->set_rules("message", "Message", "required|xss_clean");

		if($this->form_validation->run() == FALSE){
			$data["message"] = "The email has failed to send!";
			$this->load->view("templates/header");
			$this->load->view("contact-us", $data);
			$this->load->view("templates/footer");

		} else {
			$data["message"] = "The email has successfully been sent!";

			$config['mailtype'] = 'html';
			$this->load->library('email', $config);
			
			$this->email->from(set_value("email", set_value("firstName")));
			$this->email->to('meters@ge.com');
			//$this->email->cc('gbiles@smallarmy.net'); 
			// $this->email->bcc('them@their-example.com');
			$countries = array( "" => "Select the Country", "US" => "United States", "AF" => "Afghanistan", "AX" => "Aland Islands", "AL" => "Albania", "DZ" => "Algeria", "AS" => "American Samoa", "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla", "AG" => "Antigua And Barbuda", "AR" => "Argentina", "AM" => "Armenia", "AW" => "Aruba", "AU" => "Australia", "AT" => "Austria", "AZ" => "Azerbaijan", "BS" => "Bahamas", "BH" => "Bahrain", "BD" => "Bangladesh", "BB" => "Barbados", "BY" => "Belarus", "BE" => "Belgium", "BZ" => "Belize", "BJ" => "Benin", "BM" => "Bermuda", "BT" => "Bhutan", "BO" => "Bolivia", "BA" => "Bosnia and Herzegowina", "BW" => "Botswana", "BV" => "Bouvet Island", "BR" => "Brazil", "BAT" => "British Antarctic Territory", "IO" => "British Indian Ocean Territory", "BN" => "Brunei Darussalam", "BG" => "Bulgaria", "BF" => "Burkina Faso", "BI" => "Burundi", "KH" => "Cambodia", "CM" => "Cameroon", "CA" => "Canada", "CEI" => "Canton & Enderbury I", "CV" => "Cape Verde", "KY" => "Cayman Islands", "CF" => "Central African Republic", "TD" => "Chad", "CL" => "Chile", "CN" => "China", "CX" => "Christmas Island", "CC" => "Cocos (Keeling) Islands", "CO" => "Colombia", "KM" => "Comoros", "CD" => "Congo, The Democratic Republic Of The", "CK" => "Cook Islands", "CR" => "Costa Rica", "CI" => "Cote D'ivoire", "HR" => "Croatia", "CY" => "Cyprus", "CZ" => "Czech Republic", "DK" => "Denmark", "DJ" => "Djibouti", "DM" => "Dominica", "DO" => "Dominican Republic", "DML" => "Dronning Maud Land", "EC" => "Ecuador", "EG" => "Egypt", "SV" => "El Salvador", "GQ" => "Equatorial Guinea", "ER" => "Eritrea", "EE" => "Estonia", "ET" => "Ethiopia", "FK" => "Falkland Islands (Malvinas)", "FO" => "Faroe Islands", "FJ" => "Fiji", "FI" => "Finland", "FR" => "France", "GF" => "French Guiana", "PF" => "French Polynesia", "TF" => "French Southern Territories", "GA" => "Gabon", "GM" => "Gambia", "GE" => "Georgia", "DE" => "Germany", "GH" => "Ghana", "GI" => "Gibraltar", "GIL" => "Gilbert Islands", "GR" => "Greece", "GL" => "Greenland", "GD" => "Grenada", "GP" => "Guadeloupe", "GU" => "Guam", "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea", "GW" => "Guinea-Bissau", "GY" => "Guyana", "HT" => "Haiti", "HM" => "Heard And McDonald Islands", "HN" => "Honduras", "HK" => "Hong Kong", "HU" => "Hungary", "IS" => "Iceland", "IN" => "India", "ID" => "Indonesia", "IQ" => "Iraq", "IE" => "Ireland", "IM" => "Isle Of Man", "IL" => "Israel", "IT" => "Italy", "JM" => "Jamaica", "JP" => "Japan", "JE" => "Jersey", "JIL" => "Johnston Island", "JO" => "Jordan", "KZ" => "Kazakhstan", "KE" => "Kenya", "KI" => "Kiribati", "KW" => "Kuwait", "KG" => "Kyrgyzstan", "LA" => "Lao People's Democratic Republic", "LV" => "Latvia", "LB" => "Lebanon", "LS" => "Lesotho", "LR" => "Liberia", "LY" => "Libyan Arab Jamahiriya", "LI" => "Liechtenstein", "LT" => "Lithuania", "LU" => "Luxembourg", "MO" => "Macau", "MK" => "Macedonia", "MG" => "Madagascar", "MW" => "Malawi", "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands", "MQ" => "Martinique", "MR" => "Mauritania", "MU" => "Mauritius", "MX" => "Mexico", "FM" => "Micronesia", "MIL" => "Midway Islands", "MD" => "Moldova", "MC" => "Monaco", "MN" => "Mongolia", "ME" => "Montenegro", "MS" => "Montserrat", "MA" => "Morocco", "MZ" => "Mozambique", "NA" => "Namibia", "NR" => "Nauru", "NP" => "Nepal", "NL" => "Netherlands", "AN" => "Netherlands Antilles", "NC" => "New Caledonia", "HEB" => "New Hebrides", "NZ" => "New Zealand", "NI" => "Nicaragua", "NE" => "Niger", "NG" => "Nigeria", "NF" => "Norfolk Island", "MP" => "Northern Mariana Islands", "NO" => "Norway", "OM" => "Oman", "PAC" => "Pacific Islands", "PK" => "Pakistan", "PW" => "Palau", "PS" => "Palestinian Territory, Occupied", "PA" => "Panama", "PG" => "Papua New Guinea", "PY" => "Paraguay", "PE" => "Peru", "PH" => "Philippines", "PN" => "Pitcairn", "PL" => "Poland", "PT" => "Portugal", "PR" => "Puerto Rico", "QA" => "Qatar", "RE" => "Reunion", "RO" => "Romania", "RU" => "Russia", "RW" => "Rwanda", "BL" => "Saint Barthelemy", "KN" => "Saint Kitts And Nevis", "LC" => "Saint Lucia", "MF" => "Saint Martin (French Portion)", "VC" => "Saint Vincent And The Grenadines", "SAI" => "Saipan", "WS" => "Samoa", "SM" => "San Marino", "ST" => "Sao Tome And Principe", "SA" => "Saudi Arabia", "SD" => "Scotland", "SN" => "Senegal", "RS" => "Serbia (Republic Of Serbia)", "SC" => "Seychelles", "SL" => "Sierra Leone", "SG" => "Singapore", "SK" => "Slovakia", "SI" => "Slovenia", "SB" => "Solomon Islands", "SO" => "Somalia", "SOU" => "Sou", "ZA" => "South Africa", "GS" => "South Georgia And The South Sandwich Islands", "ROK" => "South Korea", "SRH" => "Southern Rhodesia", "ES" => "Spain", "LK" => "Sri Lanka", "SH" => "St. Helena", "PM" => "St. Pierre And Miquelon", "SR" => "Suriname", "SJ" => "Svalbard And Jan Mayen Islands", "SZ" => "Swaziland", "CH" => "Switzerland", "TW" => "Taiwan", "TJ" => "Tajikistan", "TZ" => "Tanzania, United Republic", "TH" => "Thailand", "TL" => "Timor-Leste", "TG" => "Togo", "TK" => "Tokelau", "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TN" => "Tunisia", "TR" => "Turkey", "TM" => "Turkmenistan", "TC" => "Turks And Caicos Islands", "TV" => "Tuvalu", "UG" => "Uganda", "UA" => "Ukraine", "AE" => "United Arab Emirates", "GB" => "United Kingdom", "UY" => "Uruguay", "UZ" => "Uzbekistan", "VU" => "Vanuatu", "VE" => "Venezuela", "VN" => "Vietnam", "VG" => "Virgin Islands (British)", "WIL" => "Wake Island", "WF" => "Wallis And Futuna Islands", "WIN" => "West Indies", "EH" => "Western Sahara", "YE" => "Yemen", "YUG" => "Yugoslavia", "ZAR" => "Zaire", "ZM" => "Zambia", "ZW" => "Zimbabwe" );
			
			
			$firstName = set_value("firstName");
			$lastName = set_value("lastName");
			$email = set_value("email"); 
			$phone = set_value("phone");
			$company = set_value("company");
			$country = $countries[set_value("country")];
			$state = set_value("state");
			$preferred = set_value("preferred");
			$streetAddress1 = set_value("streetAddress1");
			$streetAddress2 = set_value("streetAddress2");
			$city = set_value("city");
			$zip = set_value("zip");
			$message = set_value("message");
			
			
			$this->email->subject('GE Protimeter Contact Form');
			$this->email->message( $this->load->view('templates/email_template', compact('firstName', 'lastName', 'email', 'phone', 'company', 'country', 'state', 'preferred', 'streetAddress1', 'streetAddress2', 'city', 'zip', 'message'), TRUE) );
			$this->email->send();

			
			//Send out confirmation email to user.
			$this->email->to($email);
			$this->email->subject('GE Confirmation of Contact Request.');
			$this->email->message( 'Thank you. We have received your contact request.' );
			$this->email->send();
			
			//echo $this->email->print_debugger();

			$this->load->view("templates/header");
			$this->load->view("contact-us", $data);
			$this->load->view("templates/footer");
		} 
	}
}

?>