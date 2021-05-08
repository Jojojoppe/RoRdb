<html>
<body>
<?php

require_once("db_functions.php");
require_once("utils.php");

function categorie_print_leafs($categories, $indent){
	foreach($categories as $cat){
		echo $indent."+ <a href='?category=". $cat["id"] ."&categoryname=". $cat["name"] ."'>". $cat["name"] ."</a>";
		echo " <i style='font-size:10px'>Search tags: [";
		echo(implode(", ", $cat["flatten"]));
		echo "]</i><br>\n";
		categorie_print_leafs($cat["childs"], $indent."....");
	}
}

$categories = db_get_categories();
categorie_print_leafs($categories, "");

echo "<b>ITEMS</b><br>";

if(isset($_GET["category"])){
	// List items in category
	$categoryid = $_GET["category"];
	$category = $_GET["categoryname"];
	echo "Listing items for '$category [$categoryid]'<br>";
	$items = db_get_items_from_category($categoryid);
	preprint($items);
}

?>
</body>
</html>
