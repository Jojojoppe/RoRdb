<?php

require_once __DIR__."/utils.php";
require_once __DIR__."/../cfg/appconfig.php";
require_once __DIR__."/apiwrapper/sheets.php";
require_once __DIR__."/apiwrapper/drive.php";
require_once __DIR__."/functions/db_put.php";
require_once __DIR__."/functions/db_get.php";

$categories = db_get_categories();
$locations = db_get_locations();

function generate_category_list($categories, $indent){
	foreach($categories as $c){
		echo $indent.$c["name"]."<br>";
		generate_category_list($c["childs"], $indent."....");
	}
}

function generate_location_list($locations, $indent){
	foreach($locations as $l){
		echo $indent.$l["name"]."<br>";
		generate_location_list($l["childs"], $indent."....");
	}
}

?>

<style>
	table, th, td {  border: 1px solid black;}
</style>

<table width="100%">
	<tr>
		<th>Categories</th>
		<th>Locations</th>
	</tr>
	<tr>
		<td><?php generate_category_list($categories, ""); ?></td>
		<td><?php generate_location_list($locations, ""); ?></td>
	</tr>
	<tr>
		<td>
			Create a category: <a href="forms/create_category.php">click</a><br>
		</td>
		<td>
			Create a location: <a href="forms/create_location.php">click</a><br>
		</td>
	</tr>
</table>
