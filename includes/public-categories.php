<?php

function rordb_public_categories_sidebar(){
    $ret = "";

    // Check if right permissions
    if(!rordb_can_user_edit_categories()){
        $ret .= "<i>ERROR: You dont have permission to edit categories!</i>";
        return $ret;
    }
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        $ret .= "<i>ERROR: No valid database is loaded. Contact the dotCom!</i>";
        return $ret;
    }

    // Show list of categories
    $ret .= "<b>List of categories</b><br>";

    $db = new RordbDatabase();
    rordb_categories_do_action($_POST, $db);

    $db->categories_execute_recursive(function($cat, $level, &$ret){
        $indent = str_repeat("---", $level);
        $ret .= "+ ".$indent.$cat["name"];
        if(rordb_categories_can_edit_category($cat["id"])){
            $ret .= " <a href='?";
            $ret .= rordb_categories_get_edit_url($_GET, $cat["id"]);
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

    // Check if right permissions
    if(!rordb_can_user_edit_categories()){
        $ret .= "<i>ERROR: You dont have permission to edit categories!</i>";
        return $ret;
    }
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        $ret .= "<i>ERROR: No valid database is loaded. Contact the dotCom!</i>";
        return $ret;
    }

    $ret .= "<h2>Categories</h2>";

    $db = new RordbDatabase();
    if(rordb_categories_if_editing($_GET)){
        $category = $db->get_category($_GET["rordb_edit"]);
        $currentcatid = $category["id"];
        $currentcatname = $category["name"];
        unset($_GET["rordb_edit"]);
        $action_url = http_build_query($_GET);
        $ret .= '
            <h5>Edit a category</h5>
            <form action="?'.$action_url.'" method="post">
                <input type="hidden" name="rordb_edit_id" value="'.$currentcatid.'">
                <table class="form-table" role="presentation"><tbody>
                    <tr>
                        <th scope="row">Category name</th>
                        <td><input type="text" name="rordb_edit_name" value="'.$currentcatname.'"></td>
                    </tr>
                    <tr>
                        <th scope="row">Category parent</th>
                        <td>
                            <select name="rordb_edit_parent">
        ';

        $db->categories_execute_recursive(function($c, $lvl, $category, &$ret){
            $name = $c["name"];
            $id = $c["id"];
            // Check if circular dependency will occur if this is set as parent
            if(in_array($category['id'], $c['parents'])) return;
            $indent = str_repeat("----", $lvl);
            $ret .= "<option value='".$name."' ";
            if($id==$category["parentid"]) $ret .= "selected";
            $ret .= ">".$indent.$name;
            $ret .= "</option>";
        }, $category, $ret);

        $ret .= '
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"> Delete category</th>
                        <td><input type="checkbox" name="rordb_edit_delete"></td>
                    </tr>
                </tbody></table>
                <p class="submit"><input type="submit" value="Update category" class="button button-primary"></p>
            </form>
        ';
    }else{
        // Create form
        $ret .= '
            <h5>Create a category</h5>
            <form action="" method="post">
                <table class="form-table" role="presentation"><tbody>
                    <tr>
                        <th scope="row">Category name</th>
                        <td><input type="text" name="rordb_create_name" value=""></td>
                    </tr>
                    <tr>
                        <th scope="row">Category parent</th>
                        <td>
                            <select name="rordb_create_parent" value="">
        ';

        $db->categories_execute_recursive(function($c, $lvl, &$ret){
            $name = $c["name"];
            $id = $c["id"];
            $indent = str_repeat("---", $lvl);
            $ret .= "<option value='".$name."'>".$indent.$name."</option>";
        }, $ret);

        $ret .= '
                        </td>
                    </tr>
                </tbody></table>
                <p class="submit"><input type="submit" value="Create category" class="button button-primary"></p>
            </form>
        ';
    }

    return $ret;
}