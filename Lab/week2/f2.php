<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 9/24/2017
 * Time: 9:48 AM
 */
echo @$_GET['index'];
echo "<br/>";
echo @$_GET['other'];
echo "<br/>";
echo $_GET['index'] + $_GET['other'];
echo "<br/>";
echo $_GET['index'] / $_GET['other'];
echo "<br/>";
echo $_GET['index'] % $_GET['other'];

//?index=whatever+value&other=new
#Task 4
//GET two inputs from the url
//assume these inputs to be numbers

//ouput the sum of these numbers

show_source(__FILE__);