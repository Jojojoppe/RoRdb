<?php

require_once("../cfg/cfg.php");
require_once("../cfg/dburl.php");
require_once("utils.php");

require_once("../third_party/google-api-php-client--PHP8.0/vendor/autoload.php");

putenv('GOOGLE_APPLICATION_CREDENTIALS=../cfg/apikey.json');
$client = new Google\Client();
$client->useApplicationDefaultCredentials();
$client->addScope(Google_Service_Sheets::SPREADSHEETS);

if ($client->isAccessTokenExpired()) {
    $client->refreshTokenWithAssertion();
}

$service = new Google_Service_Sheets($client);

$range = 'Info!A1:B3';
$response = $service->spreadsheets_values->get($database_sheet_id, $range);
preprint($response->getValues());

$values = [
  'range' => "Info!C1:F4",
  'majorDimension' => 'ROWS',
  'values' => [
    ["Item", "Cost", "Stocked", "Ship Date"],
    ["Wheel", "$20.50", "4", "3/1/2016"],
    ["Door", "$15", "2", "3/15/2016"],
    ["Engine", "$100", "1", "30/20/2016"],
  ],
];
$body = new Google_Service_Sheets_ValueRange($values);
$params = array(
  'valueInputOption' => 'RAW'
);
$result = $service->spreadsheets_values->update($database_sheet_id, "Info!C1:F4", $body, $params);
preprint($result);

?>
