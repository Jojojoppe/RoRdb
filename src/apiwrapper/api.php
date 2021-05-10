<?php

require_once __DIR__."/../../third_party/google-api-php-client--PHP8.0/vendor/autoload.php";

putenv('GOOGLE_APPLICATION_CREDENTIALS='.__DIR__.'/../../cfg/apikey.json');
$apiclient = new Google\Client();
$apiclient->useApplicationDefaultCredentials();
$apiclient->addScope(Google_Service_Sheets::SPREADSHEETS);
$apiclient->addScope(Google_Service_Drive::DRIVE);
$apiclient->addScope(Google_Service_Drive::DRIVE_FILE);

if ($apiclient->isAccessTokenExpired()) {
	$apiclient->refreshTokenWithAssertion();
}

function api_get_client(){
	GLOBAL $apiclient;
	return $apiclient;
}

?>
