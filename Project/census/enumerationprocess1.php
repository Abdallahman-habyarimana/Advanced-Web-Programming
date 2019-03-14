<?php session_start(); /* * Following code will get single product details * A product is identified by product id (pid) */ // array for JSON response 
$response = array(); // include db connect class 
require_once 'db_connect.php'; // connecting to db 
$number=$_POST['number'];
$Idnumber=0;
$province=$_POST['province'];
$district=$_POST['district'];
$cell=$_POST['cell'];
$sector=$_POST['sector'];
$village=$_POST['village'];
$year=$_POST['year'];
$number=$_POST['number'];
$Idnumber=$_POST['Idnumber'];
$habitant=$_POST['habitant'];
$cooking=$_POST['cooking'];
$lighting=$_POST['lighting'];
$building=$_POST['building'];
$tenure=$_POST['tenure'];
$roof=$_POST['roof'];
$walls=$_POST['walls'];
$floor=$_POST['floor'];
$water=$_POST['water'];
$facility=$_POST['Facility'];
$Bed=$_POST['Bed'];
$rooms=$_POST['ROOMS'];
$Occupant=$_POST['Occupant'];
$dat=date('Y,m,d');

$result = mysql_query("SELECT * FROM household WHERE House_Id = '$Idnumber'"); 
if (!empty($result)) { // check for empty result
 if (mysql_num_rows($result) > 0) 
{ 
$result = mysql_fetch_array($result);
$product["Idnumber"] = $result["House_Id"];  
$response["success"] = 1; // user node 
$response["This house has already enumerate"] = array(); 
  array_push($response["This house has already enumerate"], $product); // echoing JSON response
   echo json_encode($response); 
   } 
   else { // no product found
   $query = mysql_query("INSERT into household  VALUES('$Idnumber','$id','$number','$habitant','$building','$tenure','$roof','$walls','$floor','$rooms','$Bed','$Occupant','$water','$facility',
'$lighting','$cooking','$dat','$year','$village','$cell','$sector','$district','$province')"); 
if($query)
{

	 // echo no users JSON
	  echo json_encode($response); } } }else { // no product found 
	  $response["success"] = 0;
	   $response["message"] = "No information Found"; // echo no users JSON 
	   echo json_encode($response); } 
	   
 ?>