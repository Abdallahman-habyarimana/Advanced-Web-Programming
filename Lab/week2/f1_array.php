<?php
/**
 * Created by PhpStorm.
 * User: 101087205
 * Date: 04/10/2017
 * Time: 1:03 PM
 */
$arr1 = [];
$arr2 = ["width", "values",12,3.54,true];
$arr3 = array();
$arr4 = array("width", "values",12,3.54,true);
print $arr2[0];
echo '<br/>';
var_dump($arr2);
echo '<br/>';
print count($arr2);
echo '<br/>';
print sizeof($arr2);
echo '<br/>';
$string ="Hello";
print $string;
echo '<br/>';
var_dump($string);

$arr4[10] ="11 th Index";

var_dump($arr4);

unset($arr4[2]);
echo '<br/>';echo '<br/>';
var_dump($arr4);

//associative array

$a_arr1 = ['name'=> 'comp1230', 'student'=>'Abdallah'];
echo '<br/>';echo '<br/>';
var_dump($a_arr1);

//Multi dimensional array
echo '<br/>';echo '<br/>';
$md_arr1 = [];
$md_arr1[0] = [1,2,3];
$md_arr1[1] = [1,2,4];
$md_arr1[2] = [1,2,6];

print $md_arr1[0][1];
echo '<br/>';echo '<br/>';
print $md_arr1[1][2];
var_dump($md_arr1);
echo '<br/>';echo '<br/>';
$schedule = array('Monday'=> array('comp1111','comp1230'), 'Tuesday'=>
    array('COMP1230', 'cOMP'));
var_dump($schedule);

$schedule1 = ['Monday'=>['8am'=>'Comp2345','10am'=>'comp6789', 0=>3423423]];
echo '<br/>';echo '<br/>';
print $schedule['Monday'][0];
echo '<br/>';echo '<br/>';
print $schedule1['Monday']['8am'];
echo '<br/>';echo '<br/>';

//echo "My cla"