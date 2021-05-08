<?php

// PHP equivalent of JS encodeURIComponent()
function encodeURIComponent($str){
	$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
	return strtr(rawurlencode($str), $revert);
}

// Do database lookup
function dbLookup($query, $databaseURL, $sheet){
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
