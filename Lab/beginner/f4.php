<?php
/**
 * Created by PhpStorm.
 * User: 101087205
 * Date: 20/09/2017
 * Time: 1:32 PM
 */

$double =12.34;
   $int = 56;
   $str ="My String";
   const MY ="final statement";

   echo number_format(12345);
   print "<br/>";
   print date("m/d/y");
   print "<br/>";
   print date("F j, Y");
   print "<br/>";
   print is_numeric($str);
   print "<br/>";
   print is_numeric($int);
   print "<br/>";
   printf("My Favourite Number is %d ", $int);
   print "<br/>";
   printf("My Constant Number is %s ", MY);
   print "<br/>";
   printf("My Favourite Number is %1\$d as an integer and %1\$.2f as a float",$int);
   print "<br/>";
   $saved = sprintf("My Favourite Number is %d ", $int);
    print "<br/>";
    echo $saved;
    $d = date_create("06-08-2018");
    $date =date_format($d,"F j, Y");
    print "<br/>";
    echo $date;