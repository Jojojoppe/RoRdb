<?php

function generate_category_dropdown($categories, $indent, $selected){
	foreach($categories as $c){
		echo "<option ";
		if($c["id"]==$selected) echo "selected ";
		echo "value=\"".$c["name"]."\">";
		echo $indent.$c["name"];
		echo "</option>";
		generate_category_dropdown($c["childs"], $indent."....", $selected);
	}
}

// Category field MUST be set
if(isset($_GET["category"])){

	// Check if edit is submitted
	if(isset($_POST["name"])){

		db_update_category($_GET["category"], $_POST["name"], $_POST["parent"]);

		header("Location: ?");
		exit;
	}
?>

<form action="", method="post">
	Name: <input type="text" name="name", value="<?php echo $categories_flat[$_GET["category"]]["name"] ?>"><br>
	Parent category: <select name="parent">
	<?php 
		generate_category_dropdown($categories, "", $categories_flat[$_GET["category"]]["parentId"]);
	?>
	</select><br>
	<input type="submit" value"Create">
</form>

<?php
}else{
	echo "No category selected<br>";
}

?>
<a href="?">BACK</a>
