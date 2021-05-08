<?php

require_once("../cfg/cfg.php");
require_once("utils.php");

// Check for errors in db query. Returns TRUE if there
// are errors and prints the error message.
function db_check_error($res){
	$is_err = array_key_exists("errors", $res);
	if($is_err){
		foreach($res["errors"] as $err){
			echo "<b>ERROR [";
			echo $err["reason"];
			echo "]: ";
			echo $err["message"];
			echo "</b>";
			preprint($err["detailed_message"]);
		}
	}
	return $is_err;
}

// Recursively generate tree structure
// Used by db_get_categories
function db_get_categories_generate_tree($childarray, $node_id, $node){
	// node contains the current node
	$ret = array();

	$ret["name"] = $node;
	$ret["id"] = $node_id;
	$ret["childs"] = array();
	$ret["childids"] = array();
	$ret["flatten"] = array();
	$ret["flattenids"] = array();
	array_push($ret["flatten"], $node);
	array_push($ret["flattenids"], $node_id);

	foreach($childarray[$node_id]["childids"] as $childid){
		$child = $childarray[$childid];
		array_push($ret["childids"], $childid);
		$childret = db_get_categories_generate_tree($childarray, $childid, $child["name"]);
		array_push($ret["childs"], $childret);
		// Add all flatten nodes
		foreach($childret["flatten"] as $i) array_push($ret["flatten"], $i);
		foreach($childret["flattenids"] as $i) array_push($ret["flattenids"], $i);
	}

	return $ret;
}

// Returns array with all categories
// subcatecogies are places as sub-arrays
function db_get_categories(){
	GLOBAL $database_url;
	GLOBAL $categories_tab_name;
	GLOBAL $categories_col_ID;
	GLOBAL $categories_col_NAME;
	GLOBAL $categories_col_PARENT;
	GLOBAL $categories_col_PARENTID;
	GLOBAL $categories_col_PARENT_LIST;
	GLOBAL $categories_col_PARENTID_LIST;
	GLOBAL $categories_col_CHILD_LIST;
	GLOBAL $categories_col_CHILDID_LIST;

	// Get relevant information from categories tab
	$query = "select $categories_col_ID,$categories_col_NAME,$categories_col_CHILD_LIST,$categories_col_CHILDID_LIST,$categories_col_PARENTID";
	$res = dbLookup($query, $database_url, $categories_tab_name);
	if(db_check_error($res)){
		return FALSE;
	}

	// Get table fields
	$table = $res["table"];

	$childarray = array();
	$rootnodes = array();

	foreach($table["rows"] as $rowarray){
		$row_ID = $rowarray["c"][0]["v"];
		$row_NAME = $rowarray["c"][1]["v"];
		$row_CHILD_LIST = $rowarray["c"][2]["v"];
		$row_CHILDID_LIST = $rowarray["c"][3]["v"];
		$row_PARENTID = $rowarray["c"][4]["v"];

		// Check if it is a root node
		if($row_PARENTID==""){
			$rootnodes[$row_ID] = array();
			$rootnodes[$row_ID]["name"] = $row_NAME;
		}
		
		$childarray[$row_ID] = array();
		$childarray[$row_ID]["name"] = $row_NAME;
		$childarray[$row_ID]["childs"] = explode(",", $row_CHILD_LIST);
		$childarray[$row_ID]["childids"] = explode(",", $row_CHILDID_LIST);

		// Delete last empy item from child list
		array_pop($childarray[$row_ID]["childs"]);
		array_pop($childarray[$row_ID]["childids"]);

	}

	$fulltree = array();

	// Generate full tree
	foreach($rootnodes as $root_id=>$root_name){
		array_push($fulltree, db_get_categories_generate_tree($childarray, $root_id, $root_name["name"]));
	}

	return $fulltree;
}

function db_get_items_from_category($category){
	GLOBAL $database_url;
	GLOBAL $items_tab_name;
	GLOBAL $items_col_ID;
	GLOBAL $items_col_NAME;
	GLOBAL $items_col_CATEGORY;
	GLOBAL $items_col_CATEGORYID;
	GLOBAL $items_col_CATEGORY_SEARCH_LIST;
	GLOBAL $items_col_CATEGORY_SEARCH_LIST_ID;
	GLOBAL $items_col_HIDDEN;

	// Get relevant information from items tab where $category (ID!) can be found in the search list
	$query = "select $items_col_ID,$items_col_NAME,$items_col_CATEGORY,$items_col_CATEGORYID,$items_col_CATEGORY_SEARCH_LIST_ID,$items_col_HIDDEN ".
		"where ($items_col_CATEGORY_SEARCH_LIST_ID contains '".$category."') and ".
		"($items_col_HIDDEN=0)";
	echo $query."<br>";
	$res = dbLookup($query, $database_url, $items_tab_name);
	if(db_check_error($res)){
		return FALSE;
	}

	// Get table fields
	$table = $res["table"];

	$itemlist = array();
	foreach($table["rows"] as $rowarray){
		$row_ID = $rowarray["c"][0]["v"];
		$row_NAME = $rowarray["c"][1]["v"];
		$row_CATEGORY = $rowarray["c"][2]["v"];

		$item = array();
		$item["id"] = $row_ID;
		$item["name"] = $row_NAME;
		$item["category"] = $row_CATEGORY;

		array_push($itemlist, $item);
	}

	return $itemlist;
}

?>
