<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 12/10/2017
 * Time: 2:39 PM
 */
include_once 'Function.inc.php';
$array1 = read_Contacts();
var_dump($array1);

foreach($array1 as $row=>$items ){
    foreach ($items as $itemu=>$key1){
        echo $key1;
    }
}