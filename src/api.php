<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * handles creation, read, and deletion of XML converter
 *
 * @author James
 */
class api {
    
    //properties
    private $var = array();
    private $dir = "src/entries";
    
    // methods
    public function __get($name){
        
    }
    
    public function __list(){
        return json_encode(['NULL','NULL',['NULL','TEST','example'],'200']);
    }
    
    // methods (Dont Work)
    public function __construct()
    {
        
    }
    
    public function __isset($name)
    {
        if(method_exists($this, ($method = 'isset_'.$name)))
        {
            return $this->$method($value);
        }
    }
    
    public function __set($url,$type){
        
    }
}
