<html>
<head>
<title>RoRdb</title>
<style>
table, th, td {  border: 1px solid black;}
</style>
</head>
<body>

<?php

require_once("db_functions.php");
require_once("utils.php");

if(isset($_GET["id"])){
	echo "Information of item ".$_GET["id"];
}

?>
</body>
</html>
