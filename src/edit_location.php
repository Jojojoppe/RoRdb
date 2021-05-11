<?php

function generate_location_dropdown($locations, $indent, $selected){
	foreach($locations as $c){
		echo "<option ";
		if($c["id"]==$selected) echo "selected ";
		echo "value=\"".$c["name"]."\">";
		echo $indent.$c["name"];
		echo "</option>";
		generate_location_dropdown($c["childs"], $indent."....", $selected);
	}
}

// Category field MUST be set
if(isset($_GET["location"])){

	// Check if edit is submitted
	if(isset($_POST["name"])){

		db_update_location($_GET["location"], $_POST["name"], $_POST["parent"]);

		header("Location: ?");
		exit;
	}
?>

<form action="", method="post">
	Name: <input type="text" name="name", value="<?php echo $locations_flat[$_GET["location"]]["name"] ?>"><br>
	Parent location: <select name="parent">
	<?php 
		generate_location_dropdown($locations, "", $locations_flat[$_GET["location"]]["parentId"]);
	?>
	</select><br>
	<input type="submit" value"Create">
</form>

<?php
}else{
	echo "No location selected<br>";
}

?>
<a href="?">BACK</a>
