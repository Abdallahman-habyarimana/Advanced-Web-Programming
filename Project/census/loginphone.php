<?php session_start(); /* * Following code will get single product details * A product is identified by product id (pid) */ // array for JSON response 
$response = array(); // include db connect class 
require_once 'db_connect.php'; // connecting to db 
 if (isset($_POST["username"]) && isset($_POST["password"])) {
 $user=$_POST["username"];
 $pass= $_POST["password"];

$result = mysql_query("SELECT * FROM enumerators WHERE Username = '$user' AND Password = '$pass'"); 
if (!empty($result)) { // check for empty result
 if (mysql_num_rows($result) > 0) 
{ 
$result = mysql_fetch_array($result);
$product["user"] = $result["Username"];  
$response["success"] = 1; // user node 
$response["login"] = array(); 
  array_push($response["login"], $product); // echoing JSON response
   echo json_encode($response); 
   } 
   else { // no product found
    $response["success"] = 0;
	 $response["message"] = "fail to login"; 
	 // echo no users JSON
	  echo json_encode($response); } } else { // no product found 
	  $response["success"] = 0;
	   $response["message"] = "fail to login"; // echo no users JSON 
	   echo json_encode($response); } } else { // required field is missing 
	   $response["success"] = 0; 
	   $response["message"] = "Required field(s) is missing"; // echoing JSON response
	    echo json_encode($response);
 } ?>