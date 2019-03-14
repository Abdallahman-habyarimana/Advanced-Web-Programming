<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 10/4/2017
 * Time: 8:26 AM
 */

function get($a,$b){
echo $a+$b;
}

get(5,15);

function getRequest(){
    if($_SERVER['REQUEST_METHOD']=='GET')
            $the_request = &$_GET;
      else
          $the_request = &$_POST;

    return $the_request;
}

function get($param_name){
$the_request = getRequest();
}