<html>
<head>
<style>
table, th, td {  border: 1px solid black;}
</style>
</head>
<body>

<?php

require_once("db_functions.php");
require_once("utils.php");

function categories_print_leafs($categories, $indent){
	foreach($categories as $cat){
		echo $indent."+ <a href='?category=". $cat["id"] ."&categoryname=". $cat["name"] ."'>". $cat["name"] ."</a>";
		echo "<br>\n";
		categories_print_leafs($cat["childs"], $indent."....");
	}
}

function locations_print_leafs($locations, $indent){
	foreach($locations as $cat){
		echo $indent."+ <a href='?location=". $cat["id"] ."&locationname=". $cat["name"] ."'>". $cat["name"] ."</a>";
		echo "<br>\n";
		locations_print_leafs($cat["childs"], $indent."....");
	}
}

function items_print($items){
	echo "<table><tr><th>Item</th><th>Category</th><th>Location</th></tr>";
	foreach($items as $item){
		echo "<tr><td>";
		echo $item["name"];
		echo "</td><td>";
		echo $item["category"];
		echo "</td><td>";
		echo $item["location"];
		echo "</td></tr>";
	}
	echo "</table>";
}

$categories = db_get_categories();
$locations = db_get_locations();

echo "<table style='width:100%;font-size:9px'><tr><th>Categories</th><th>Locations</th></tr>";
echo "<tr><td>";
categories_print_leafs($categories, "");
echo "</td><td>";
locations_print_leafs($locations, "");
echo "</td></tr></table>";

echo "<b>ITEMS</b><br>";

if(isset($_GET["category"])){
	// List items in category
	$categoryid = $_GET["category"];
	$category = $_GET["categoryname"];
	echo "Listing items for category '$category [$categoryid]'<br>";
	$items = db_get_items_from_category($categoryid);
	items_print($items);
}else if(isset($_GET["location"])){
	// List items in location
	$locationid = $_GET["location"];
	$location = $_GET["locationname"];
	echo "Listing items for location '$location [$locationid]'<br>";
	$items = db_get_items_from_location($locationid);
	items_print($items);
}

?>
</body>
</html>
