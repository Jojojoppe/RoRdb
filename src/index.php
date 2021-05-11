<?php

require_once __DIR__."/utils.php";
require_once __DIR__."/../cfg/appconfig.php";
require_once __DIR__."/apiwrapper/sheets.php";
require_once __DIR__."/apiwrapper/drive.php";
require_once __DIR__."/functions/db_put.php";
require_once __DIR__."/functions/db_get.php";
require_once __DIR__."/functions/db_update.php";

$catarray = db_get_categories();
$locarray = db_get_locations();
$categories = $catarray[0];
$categories_flat = $catarray[1];
$locations = $locarray[0];
$locations_flat = $locarray[1];

function generate_category_list($categories, $indent){
	foreach($categories as $c){
		echo $indent.$c["name"];
		echo " <a href='?rordb_action=category_edit&category=".$c["id"]."'>edit</a>";
		echo "<br>";
		generate_category_list($c["childs"], $indent."....");
	}
}

function generate_location_list($locations, $indent){
	foreach($locations as $l){
		echo $indent.$l["name"];
		echo " <a href='?rordb_action=location_edit&location=".$l["id"]."'>edit</a>";
		echo "<br>";
		generate_location_list($l["childs"], $indent."....");
	}
}

if(isset($_GET["rordb_action"])){
	if($_GET["rordb_action"]=="category_create"){
		require_once __DIR__."/create_category.php";

	}else if($_GET["rordb_action"]=="location_create"){
		require_once __DIR__."/create_location.php";

	}else if($_GET["rordb_action"]=="category_edit"){
		require_once __DIR__."/edit_category.php";

	}else if($_GET["rordb_action"]=="location_edit"){
		require_once __DIR__."/edit_location.php";

	}
}else{
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
			Create a category: <a href="?rordb_action=category_create">click</a><br>
		</td>
		<td>
			Create a location: <a href="?rordb_action=location_create">click</a><br>
		</td>
	</tr>
</table>

<?php } ?>
