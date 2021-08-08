<?php

function rordb_public_categories_sidebar(){
    $ret = "";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    // CHeck for right permissions
    if(!rordb_can_user_view_categories()){
        rordb_error("You don't have permission to view categories", "error");
        return rordb_show_errors();
    }

    // Create database instance
    $db = new RordbDatabase();

    // Do actions if needed
    // Check if need to create category
    if(isset($_POST["rordb_create_name"])){
        if(rordb_can_user_create_categories()){
            $db->put_category($_POST["rordb_create_name"], $_POST["rordb_create_parent"]);
            rordb_error("Category created", "message");
        }else{
            rordb_error("You don't have permission to create categories", "error");
        }
    }
    // Check if need to update category
    if(isset($_POST["rordb_edit_name"])){
        if(rordb_can_user_edit_categories()){
            // Check if must delete
            if(isset($_POST["rordb_edit_delete"]) and $_POST["rordb_edit_delete"]==true){
                $db->delete_category($_POST["rordb_edit_id"]);
                rordb_error("Category successfully deleted", "message");
            }else{
                $db->update_category($_POST["rordb_edit_id"], $_POST["rordb_edit_name"], $_POST["rordb_edit_parent"]);
                rordb_error("Category successfully updated", "message");
            }
        }else{
            rordb_error("You don't have permission to edit categories", "error");
        }
    }

    // Show list of categories
    $ret .= "<b>List of categories</b><br>";

    $db->categories_execute_recursive(function($cat, $level, &$ret){
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

function rordb_public_categories_main(){
    $ret = "";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    function add_field($field, $label){
        $ret = "<p><label>".$label."<br><span class='wpcf7-form-control-wrap'>".$field."</p>";
        return $ret;
    }

    // Check to see if were editing or creating
    if(isset($_GET['rordb_edit'])){
        // Edit form

        if(!rordb_can_user_edit_categories()){
            rordb_error("You don't have permission to edit categories", "error");
            return rordb_show_errors();
        }

        $db = new RordbDatabase();

        // Show errors if needed
        $ret .= rordb_show_errors();

        $category = $db->get_category($_GET["rordb_edit"]);
        $currentcatid = $category["id"];
        $currentcatname = $category["name"];
        unset($_GET["rordb_edit"]);
        $action_url = http_build_query($_GET);

        $ret .= '<h2>Edit category</h2><div role="form" class="wpcf7"><form acttion="'.$action_url.'" method="post" class="wpcf7">';
        $ret .= '<input type="hidden" name="rordb_edit_id" value="'.$currentcatid.'">';

        $ret .= add_field('<input type="text" name="rordb_edit_name" value="'.$currentcatname.'">', 'Category name');

        $categories = '';
        $db->categories_execute_recursive(function($c, $lvl, &$ret, &$category){
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
        $ret .= add_field('<select name="rordb_edit_parent">'.$categories.'</select>', 'Parent category');

        $ret .= add_field('<input type="checkbox" name="rordb_edit_delete">', "Delete category");

        $ret .= '<p class="submit"><input type="submit" value="Edit category" class="button button-primary"></p></form></div>';

    }else{
        // Create form

        if(!rordb_can_user_create_categories()){
            rordb_error("You don't have permission to create categories", "error");
            return rordb_show_errors();
        }

        $db = new RordbDatabase();

        // Show errors if needed
        $ret .= rordb_show_errors();

        $ret .= '<h2>Create category</h2><div role="form" class="wpcf7"><form acttion="" method="post" class="wpcf7">';

        $ret .= add_field('<input type="text" name="rordb_create_name">', 'Category name');

        $categories = '';
        $db->categories_execute_recursive(function($c, $lvl, &$p){
            $name = $c["name"];
            $id = $c["id"];
            $indent = str_repeat("----", $lvl);
            $p .= "<option value='".$name."'>".$indent.$name."</option>";
        }, $categories);
        $ret .= add_field('<select name="rordb_create_parent">'.$categories.'</select>', 'Parent category');

        $ret .= '<p class="submit"><input type="submit" value="Create category" class="button button-primary"></p></form></div>';
    }

    return $ret;
}