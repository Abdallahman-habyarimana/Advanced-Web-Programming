<?php 
define('DB_USER', "root"); // db user
define('DB_PASSWORD', ""); // db password (mention your db password here)
define('DB_DATABASE', "census"); // database name
define('DB_SERVER', "localhost"); // db server

 $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysqli_error());
 $db = mysqli_select_db(DB_DATABASE) or die(mysqli_error()) or die(mysqli_error());
?>
