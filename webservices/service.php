<?php
include "lib/nusoap.php";
require_once 'config/configuration.php';
date_default_timezone_set('Asia/Kolkata');

$server = new soap_server();

$server->configureWSDL('Testing Webservices in PHP', 'urn:server');
 
$server->wsdl->schemaTargetNamespace = 'http://localhost/WebServices/service.php';
 
$server->register('addNumbers',
			array('val1' => 'xsd:string','val2' => 'xsd:string'),
			array('return' => 'xsd:string'),
			'urn:server',
			'urn:server#addNumbers');

function addNumbers($val1, $val2) {

	$email = $val1;
	$password = $val2;
	
	$query = "SELECT * from callsheet_user where email='$email' and password='$password'";
	
	$result = mysqli_query($con,$query);
	
	$numrows = mysqli_num_rows($result);
	
	if($numrows == 1)
	{
		$response["sum"] = "Login successful..";
	}
	else {
		$response["sum"] = "Username password do not match..";
	}
	
    return json_encode($response);
}

$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
$server->service($POST_DATA);
exit();
?>