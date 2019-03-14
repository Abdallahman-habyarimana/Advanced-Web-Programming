<?php

 require_once('db_connect.php');
        // PHP variable to store the result of the PHP function 'mysql_connect()' which establishes the PHP & MySQL connection  
 $sql = "SELECT * FROM enumerators WHERE  Username > '". $_POST["Username"]."' AND Password > '". $_POST["Password"]."'";
 $result = mysql_query($sql);
 while($row=mysql_fetch_assoc($result))
  $output[]=$row;
 print(json_encode($output));
 mysql_close();   
?>

