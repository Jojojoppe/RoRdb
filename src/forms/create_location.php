<?php

require_once __DIR__."/../utils.php";
require_once __DIR__."/../../cfg/appconfig.php";
require_once __DIR__."/../apiwrapper/sheets.php";
require_once __DIR__."/../apiwrapper/drive.php";
require_once __DIR__."/../functions/db_put.php";
require_once __DIR__."/../functions/db_get.php";

function generate_location_dropdown($locations, $indent){
	foreach($locations as $l){
		echo "<option value=\"".$l["name"]."\">";
		echo $indent.$l["name"];
		echo "</option>";
		generate_location_dropdown($l["childs"], $indent."....");
	}
}

if(isset($_POST["name"])){
	// Add category to database
	db_put_location($_POST["name"], $_POST["parent"]);
	echo "Successfully added new location ".$_POST["name"]."<br>";
}

?>

<form action="", method="post">
	Name: <input type="text" name="name"><br>
	Parent location: <select name="parent">
	<?php 
		$locations = db_get_locations();
		generate_location_dropdown($locations, "");
	?>
	</select><br>
	<input type="submit" value"Create">
</form>
<a href="../index.php">BACK</a>
