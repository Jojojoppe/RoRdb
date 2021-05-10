<?php

require_once __DIR__."/../utils.php";
require_once __DIR__."/../../cfg/appconfig.php";
require_once __DIR__."/../apiwrapper/sheets.php";
require_once __DIR__."/../apiwrapper/drive.php";
require_once __DIR__."/../functions/db_put.php";
require_once __DIR__."/../functions/db_get.php";

function generate_category_dropdown($categories, $indent){
	foreach($categories as $c){
		echo "<option value=\"".$c["name"]."\">";
		echo $indent.$c["name"];
		echo "</option>";
		generate_category_dropdown($c["childs"], $indent."....");
	}
}

if(isset($_POST["name"])){
	// Add category to database
	db_put_category($_POST["name"], $_POST["parent"]);
	echo "Successfully added new category ".$_POST["name"]."<br>";
}

?>

<form action="", method="post">
	Name: <input type="text" name="name"><br>
	Parent category: <select name="parent">
	<?php 
		$categories = db_get_categories();
		generate_category_dropdown($categories, "");
	?>
	</select><br>
	<input type="submit" value"Create">
</form>
<a href="../index.php">BACK</a>
