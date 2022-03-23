<?php

function rordb_public_hier_edit_sidebar($tab, $can_create, $can_edit, $name){
    $ret = "";

    // Create database instance
    $db = new RoRdb\RordbDatabase();

    // Do actions if needed
    // Check if need to create hier
    if(isset($_POST["rordb_create_name"])){
        if($can_create){
            $db->put_hier($_POST["rordb_create_name"], $_POST["rordb_create_parent"], $tab);
            rordb_error("Hierarchical item created", "message");
        }else{
            rordb_error("You don't have permission to create this type of hierarchical items", "error");
        }
    }
    // Check if need to update hier
    if(isset($_POST["rordb_edit_name"])){
        if($can_edit){
            // Check if must delete
            if(isset($_POST["rordb_edit_delete"]) and $_POST["rordb_edit_delete"]==true){
                $db->delete_hier($_POST["rordb_edit_id"], $tab);
                rordb_error("Hierarchical item successfully deleted", "message");
                // Stop editing the just deleted hier
                unset($_GET['rordb_edit']);
            }else{
                $db->update_hier($_POST["rordb_edit_id"], $_POST["rordb_edit_name"], $_POST["rordb_edit_parent"], $tab);
                rordb_error("Hierarchical item successfully updated", "message");
            }
        }else{
            rordb_error("You don't have permission to edit this type of hierarchical items", "error");
        }
    }

    // Show list of hier
    $ret .= "<b>List of ".$name."</b><br>";

    $db->hier_execute_recursive($tab, function($cat, $level, &$ret){
        $indent = str_repeat("---", $level);
        $ret .= "+ ".$indent.$cat["name"];
        if($cat["id"]!=0 && $cat["id"]!=1){
            $ret .= " <a href='?";
            $ret .= http_build_query(array_merge($_GET, array("rordb_edit"=>$cat["id"])));
            $ret .= "'>edit</a>";
        }
        $ret .= "<br>";
    }, $ret);

    // Display WIP notice
    $ret .= "<hr>WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_hier_main($tab, $can_edit, $can_create, $nameS, $nameP){
    $ret = "";

    function add_field($field, $label){
        $ret = "<p><label>".$label."<br><span class='wpcf7-form-control-wrap'>".$field."</p>";
        return $ret;
    }

    // Check to see if were editing or creating
    if(isset($_GET['rordb_edit'])){
        // Edit form

        if(!$can_edit){
            rordb_error("You don't have permission to edit this type of hierarchical item", "error");
            return rordb_show_errors();
        }

        $db = new RoRdb\RordbDatabase();

        // Show errors if needed
        $ret .= rordb_show_errors();

        $category = $db->get_hier($_GET["rordb_edit"], $tab);
        $currentcatid = $category["id"];
        $currentcatname = $category["name"];
        unset($_GET["rordb_edit"]);
        $action_url = http_build_query($_GET);

        $ret .= '<h2>Edit '.$nameS.'</h2><div role="form" class="wpcf7"><form acttion="'.$action_url.'" method="post" class="wpcf7">';
        $ret .= '<input type="hidden" name="rordb_edit_id" value="'.$currentcatid.'">';

        $ret .= add_field('<input type="text" name="rordb_edit_name" value="'.$currentcatname.'">', 'Category name');

        $categories = '';
        $db->hier_execute_recursive($tab, function($c, $lvl, &$ret, &$category){
            $name = $c["name"];
            $id = $c["id"];
            // Check if circular dependency will occur if this is set as parent
            if(in_array($category['id'], $c['parents'])) return;
            $indent = str_repeat("----", $lvl);
            $ret .= "<option value='".$name."' ";
            if($id==$category["parentid"]) $ret .= "selected";
            $ret .= ">".$indent.$name;
            $ret .= "</option>";
        }, $categories, $category);
        $ret .= add_field('<select name="rordb_edit_parent">'.$categories.'</select>', 'Parent '.$nameS);

        $ret .= add_field('<input type="checkbox" name="rordb_edit_delete">', "Delete ".$nameS);

        $ret .= '<p class="submit"><input type="submit" value="Edit '.$nameS.'" class="button button-primary"></p></form></div>';

    }else{
        // Create form

        if(!$can_create){
            rordb_error("You don't have permission to create this type of hierarchical items", "error");
            return rordb_show_errors();
        }

        $db = new RoRdb\RordbDatabase();

        // Show errors if needed
        $ret .= rordb_show_errors();

        $ret .= '<h2>Create '.$nameS.'</h2><div role="form" class="wpcf7"><form acttion="" method="post" class="wpcf7">';

        $ret .= add_field('<input type="text" name="rordb_create_name">', $nameS.' name');

        $categories = '';
        $db->hier_execute_recursive($tab, function($c, $lvl, &$p){
            $name = $c["name"];
            $id = $c["id"];
            $indent = str_repeat("----", $lvl);
            $p .= "<option value='".$name."'>".$indent.$name."</option>";
        }, $categories);
        $ret .= add_field('<select name="rordb_create_parent">'.$categories.'</select>', 'Parent '.$nameS);

        $ret .= '<p class="submit"><input type="submit" value="Create '.$nameS.'" class="button button-primary"></p></form></div>';
    }

    return $ret;
}