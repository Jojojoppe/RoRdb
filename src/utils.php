<?php

// PHP equivalent of JS encodeURIComponent()
function encodeURIComponent($str){
	$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
	return strtr(rawurlencode($str), $revert);
}

function dbLookup($query, $sheetid, $sheet){
	$databaseURL = "https://docs.google.com/a/google.com/spreadsheets/d/".$sheetid."/gviz/tq?tq=";
	$url = $databaseURL.encodeURIComponent($query)."&sheet=".$sheet;
	$response = file_get_contents($url);
	$response = explode(");", explode("setResponse(", $response)[1])[0];
	return json_decode($response, TRUE);
}

// print_r enclosed in pre tags
function preprint($v){
	echo "<pre>"; print_r($v); echo "</pre>";
}

?>
