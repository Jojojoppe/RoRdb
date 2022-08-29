<?php

function rordb_error($type, $msg){
    if(!isset($_SESSION['DOTCOMWPP_ERROR'])) $_SESSION['DOTCOMWPP_ERROR'] = [];
    $_SESSION['DOTCOMWPP_ERROR'] = array_merge($_SESSION['DOTCOMWPP_ERROR'], [[$type, $msg]]);
}

function rordb_show_errors(){
    $ret = "";
    if(isset($_SESSION['DOTCOMWPP_ERROR'])){
        foreach($_SESSION['DOTCOMWPP_ERROR'] as $e){
            if($e[1]=="error"){
                $ret .= "<div width='100%' style='background-color:#ff6666'>ERROR: ";
            }else{
                $ret .= "<div width='100%' style='background-color:#bbff99'>MESSAGE: ";
            }
            $ret .= $e[0];
            $ret .= "</div>";       
        }
        unset($_SESSION['DOTCOMWPP_ERROR']);
    };
    return $ret;
}