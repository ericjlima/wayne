<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */

/*Data base parameters define here */

if(in_array($_SERVER['HTTP_HOST'],array('localhost')))
{
	define('HOST','localhost');
	define('DB_NAME','');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_LOCAL',true);
}
else
{
   define('HOST','localhost');
	define('DB_NAME','');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_LOCAL',true);
}

$siteurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
/*This is added to image, css and js Location so that it cane accessed over any where */
define('SITH_PATH',$siteurl);
define('JS_PATH',SITH_PATH.'js/');
define('CSS_PATH',SITH_PATH.'css/');
//echo CSS_PATH;
define('IMG_PATH',SITH_PATH.'img/');
define('STYLE_PATH',SITH_PATH.'styles/');
/* Location: ./application/config/constants.php */