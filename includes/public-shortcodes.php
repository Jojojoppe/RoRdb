<?php

function rordb_shortcode_categories($atts=[], $content=null){
    $db = new RordbDatabase();
    $ret = $db->get_categories();
    $categories = $ret[0];
    $categories_flat = $ret[1];

    foreach($categories_flat as $c){
        echo "+ ". $c['name'] ."<br>";
    }
}
add_shortcode('rordb_categories', 'rordb_shortcode_categories');