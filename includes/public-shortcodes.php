<?php

function rordb_shortcode_menu($atts=[], $content=null){
    // parse options
    if(!array_key_exists('button_class', $atts)) $atts['button_class'] = '';
    if(!array_key_exists('link_class', $atts)) $atts['link_class'] = '';

    return rordb_public_render_menu($atts['button_class'], $atts['link_class']);
}
add_shortcode('rordb_menu', 'rordb_shortcode_menu');

function rordb_shortcode_sidebar($atts=[], $content=null){
    return rordb_public_render_sidebar();
}
add_shortcode('rordb_sidebar', 'rordb_shortcode_sidebar');

function rordb_shortcode_main($atts=[], $content=null){
    return rordb_public_render_main();
}
add_shortcode('rordb_main', 'rordb_shortcode_main');