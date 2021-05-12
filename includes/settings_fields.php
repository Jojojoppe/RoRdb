<?php

// Field callbacks
// ---------------
function rordb_field_text($args){
	$option = get_option($args['label_for']);
	echo "<input type='text' id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."' ";
	echo "value='".$option."'>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_text_disabled($args){
	$option = get_option($args['label_for']);
	echo "<input disabled type='text' id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."' ";
	echo "value='".$option."'>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_textarea($args){
	$option = get_option($args['label_for']);
	echo "<textarea id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."'>";
	echo $option."</textarea>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_textarea_disabled($args){
	$option = get_option($args['label_for']);
	echo "<textarea id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."'>";
	echo $option."</textarea>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_select($args){
	$option = get_option($args['label_for']);
	$selectoptions = $args['options'];
	echo "<select id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."'>";
	foreach($selectoptions as $o){
		echo "<option value='".$o."' ";
		if($option==$o) echo "selected";
		echo ">".$o;
		echo "</option>";
	}
	echo "</select>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_checkbox($args){
	$option = get_option($args['label_for']);
	echo "<input type='checkbox' id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."' ";
	if($option) echo "checked ";
	echo "value='".$option."'>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_checkbox_disabled($args){
	$option = get_option($args['label_for']);
	echo "<input disabled type='checkbox' id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."' ";
	if($option) echo "checked ";
	echo "value='".$option."'>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}