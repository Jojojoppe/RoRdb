<?php

require_once __DIR__."/api.php";
require_once __DIR__."/../utils.php";
require_once __DIR__."/../../third_party/google-api-php-client--PHP8.0/vendor/autoload.php";

$client = api_get_client();
$sheetsservice = new Google_Service_Sheets($client);

function sheets_get_range($id, $sheet, $range){
	GLOBAL $sheetsservice;
	$rangestring = $sheet."!".$range;
	try{
		$response = $sheetsservice->spreadsheets_values->get($id, $rangestring);
		return $response->getValues();
	}catch(exception $e){
		echo "Something went wrong:<br>";
		preprint($e);
		return array();
	}
}

function sheets_put_range($id, $sheet, $range, $values, $raw=FALSE){
	GLOBAL $sheetsservice;
	$rangestring = $sheet."!".$range;
	$inputOption = "USER_ENTERED";
	if($raw) $inputOption = "RAW";
	try{
		$body = new Google_Service_Sheets_ValueRange([
			'range'=>$rangestring,
			'majorDimension'=>'ROWS',
			'values'=>$values
		]);
		$params = array(
			'valueInputOption' => $inputOption
		);
		$response = $sheetsservice->spreadsheets_values->update($id, $rangestring, $body, $params);
	}catch(exception $e){
		echo "Something went wrong:<br>";
		preprint($e);
	}
}

function sheets_create_sheet($id, $sheetname){
	GLOBAL $sheetsservice;
	try{
		$body = new Google_Service_Sheets_BatchUpdateSpreadsheetRequest([
			'requests' => [
				'addSheet' => [
					'properties' => [
						'title' => $sheetname
					]
				]
			]
		]);
		$result = $sheetsservice->spreadsheets->batchUpdate($id, $body);
	}catch(exception $e){
		echo "Something went wrong:<br>";
		preprint($e);
	}
}

function sheets_delete_sheet($id, $index){
	GLOBAL $sheetsservice;
	try{
		$body = new Google_Service_Sheets_BatchUpdateSpreadsheetRequest([
			'requests' => [
				'deleteSheet' => [
					"sheetId" => $index
				]
			]
		]);
		$result = $sheetsservice->spreadsheets->batchUpdate($id, $body);
	}catch(exception $e){
		echo "Something went wrong:<br>";
		preprint($e);
	}
}

?>
