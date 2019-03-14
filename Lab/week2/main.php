<?php
/**
 * Created by PhpStorm.
 * User: 101087205
 * Date: 04/10/2017
 * Time: 12:18 PM
 */
require 'f1.php';
const Br='<br>';
print getName();
echo Br;
print compareValues(1,1);
$val_main =10;
changeValue($val_main);
echo Br;
print $val_main;
echo Br;
$val_main = changeValue($val_main);
print $val_main;
echo Br;