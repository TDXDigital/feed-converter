<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function include_sources($include_params,$page_depth){
    /*
     * Function Accepts either one or semicolon separated list or array
     * based on values of array builds array of required external files 
     * for inclusion in HTML file access references by iteration and echo/print
     */
    
    //convert array or string
    if(is_array($include_params)){
        $params = $include_params;
    }
    else{
        $params = explode(";", $include_params);
    }
    $val = array();
    /*
    if(is_null($page_depth)){
        $pdepth=$depth?:0;
    }
    else{*/
        $pdepth = $page_depth;
    //}
    //determine depth of current page
    $nav_depth = "";
    for($i=0;$i<$pdepth;$i++){
        $nav_depth .= "../";
    }
    
    // generate return array
    foreach($params as $arg){
        switch ($arg){
            case "jquery":
                array_push($val,array("foot","<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>"));
                break;
            case "bootstrap-superhero":
                //array_push($val,array("foot","<script src='".$nav_depth."includes/superhero/bootstrap.min.css' rel='stylesheet' ></script>"));
                array_push($val,array("head","<link href='".$nav_depth."includes/superhero/bootstrap.min.css' rel='stylesheet' />"));
                array_push($val,array("head","<link href='".$nav_depth."includes/superhero/bootstrap.less'/>"));
                break;
            case "bootstrap-3.3.4":
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' />"));
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.4/css/bootstrap-theme.min.css' rel='stylesheet' />"));
                array_push($val,array("foot","<script src='".$nav_depth."includes/bootstrap/3.3.4/js/bootstrap.min.js'></script>"));
                break;
            case "bootstrap-3.3.2":
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.2/css/bootstrap.min.css' rel='stylesheet' />"));
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.2/css/bootstrap-theme.min.css' rel='stylesheet' />"));
                array_push($val,array("foot","<script src='".$nav_depth."includes/bootstrap/3.3.2/js/bootstrap.min.js'></script>"));
                break;
            case "bootstrap-latest":
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' />"));
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.4/css/bootstrap-theme.min.css' rel='stylesheet' />"));
                array_push($val,array("foot","<script src='".$nav_depth."includes/bootstrap/3.3.4/js/bootstrap.min.js'></script>"));
                break;
            case "bootstrap":
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' />"));
                array_push($val,array("head","<link href='".$nav_depth."includes/bootstrap/3.3.4/css/bootstrap-theme.min.css' rel='stylesheet' />"));
                array_push($val,array("foot","<script src='".$nav_depth."includes/bootstrap/3.3.4/js/bootstrap.min.js'></script>"));
                break;
        }
    }
    
    // return results
    return $val;
}