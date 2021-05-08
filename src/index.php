<html>
<body>
<?php

require_once("db_functions.php");
require_once("utils.php");

function categorie_print_leafs($categories, $indent){
	foreach($categories as $cat){
		echo $indent."+ ". $cat["name"] ." <i style='font-size:10px'>Search tags: [";
		echo(implode(", ", $cat["flatten"]));
		echo "]</i><br>\n";
		categorie_print_leafs($cat["childs"], $indent."....");
	}
}

$categories = db_get_categories();
categorie_print_leafs($categories, "");

?>
</body>
</html>
