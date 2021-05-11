<?php

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
	header("Location: ?");
	exit;
}

?>

<form action="", method="post">
	Name: <input type="text" name="name"><br>
	Parent category: <select name="parent">
	<?php 
		generate_category_dropdown($categories, "");
	?>
	</select><br>
	<input type="submit" value"Create">
</form>
<a href="?">BACK</a>
