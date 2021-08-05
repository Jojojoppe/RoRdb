<?php

// Returns false when user cannot render page
function rordb_locations_can_edit(){
	if(!rordb_can_user_edit_locations()){
        add_settings_error('rordb_messages', 'rordb_message',
            __('You do not have permission to view this page', 'rordb'), 'error');
        settings_errors('rordb_messages');
		return false;
	}
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        add_settings_error('rordb_messages', 'rordb_message',
            __('No valid database loaded', 'rordb'), 'error');
        settings_errors('rordb_messages');   
        return false;
    }
    return true;
}

function rordb_locations_do_action($POST, $db){
    if(isset($POST["rordb_create_name"])){
        $db->put_location($POST["rordb_create_name"], $POST["rordb_create_parent"]);
    }

    if(isset($POST["rordb_edit_name"])){
        // Check if must delete
        if(isset($POST["rordb_edit_delete"]) and $POST["rordb_edit_delete"]==true){
            $db->delete_location($POST["rordb_edit_id"]);
        }else{
            $db->update_location($POST["rordb_edit_id"], $POST["rordb_edit_name"], $POST["rordb_edit_parent"]);
        }
    }
}

function rordb_locations_if_editing($GET){
    if(isset($GET["rordb_edit"])) return true;
    return false;
}

function rordb_locations_render_create($db){
    // TODO check if can create locations

    ?>
        <h3>Create a location</h3>
        <form action="" method="post">
            <table class="form-table" role="presentation"><tbody>
                <tr>
                    <th scope="row">Location name</th>
                    <td><input type="text" name="rordb_create_name" value=""></td>
                </tr>
                <tr>
                    <th scope="row">Location parent</th>
                    <td>
                        <select name="rordb_create_parent" value="">
                        <?php 
                            $db->locations_execute_recursive(function($c, $lvl, $p){
                                $name = $c["name"];
                                $id = $c["id"];
                                $indent = str_repeat("----", $lvl);
                                echo "<option value='".$name."'>".$indent.$name."</option>";
                            });
                        ?>
                    </td>
                </tr>
            </tbody></table>
            <p class="submit"><input type="submit" value="Create location" class="button button-primary"></p>
        </form>
    <?php
}

function rordb_locations_render_edit($db, $GET){
    // TODO check if can edit cateogories

    $location = $db->get_location($GET["rordb_edit"]);
    $currentcatid = $location["id"];
    $currentcatname = $location["name"];
    unset($GET["rordb_edit"]);
    $action_url = http_build_query($GET);
    ?>
    <hr>
    <h3>Edit a location</h3>
    <form action="?<?php echo $action_url; ?>" method="post">
        <input type="hidden" name="rordb_edit_id" value="<?php echo $currentcatid; ?>">
        <table class="form-table" role="presentation"><tbody>
            <tr>
                <th scope="row">Location name</th>
                <td><input type="text" name="rordb_edit_name" value="<?php echo $currentcatname; ?>"></td>
            </tr>
            <tr>
                <th scope="row">Location parent</th>
                <td>
                    <select name="rordb_edit_parent">
                    <?php 
                        $db->locations_execute_recursive(function($c, $lvl, $location){
                            $name = $c["name"];
                            $id = $c["id"];
                            // Check if circular dependency will occur if this is set as parent
                            if(in_array($location['id'], $c['parents'])) return;
                            $indent = str_repeat("----", $lvl);
                            echo "<option value='".$name."' ";
                            if($id==$location["parentid"]) echo "selected";
                            echo ">".$indent.$name."</option>";
                        }, $location);
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row"> Delete location</th>
                <td><input type="checkbox" name="rordb_edit_delete"></td>
            </tr>
        </tbody></table>
        <p class="submit"><input type="submit" value="Update location" class="button button-primary"></p>
    </form>
    <?php
}

function rordb_locations_get_edit_url($GET, $id){
    return http_build_query(array_merge($GET, array("rordb_edit"=>$id)));
}

function rordb_locations_can_edit_location($id){
    if($id!=0 && $id!=1) return true;
    return false;
}
