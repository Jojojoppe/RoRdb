<?php

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
	header("Location: ?");
	exit;
}

?>

<form action="", method="post">
	Name: <input type="text" name="name"><br>
	Parent location: <select name="parent">
	<?php 
		generate_location_dropdown($locations, "");
	?>
	</select><br>
	<input type="submit" value"Create">
</form>
<a href="?">BACK</a>
