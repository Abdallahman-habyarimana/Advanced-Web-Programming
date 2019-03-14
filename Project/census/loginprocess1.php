<?php
require_once('db_connect.php');
session_start();
if(isset($_POST['submit'])){
$user=$_POST['username'];
$pass=$_POST['password'];
$encry=md5($pass);
$query="SELECT * from administrator where Username='$user' and Password='$pass' ";
$result=mysql_query($query) or die('Error in execution');
if(mysql_num_rows($result)>0){
$_SESSION['logged-in']=true;
 while($row=mysql_fetch_array($result)) {
		 $name=$row['Name_Admin'];
		 $_SESSION['name1']=$name;
		 $last=$row['LN_Admin'];
		 $_SESSION['last1']=$last;
		 		 }
header('location:admin.php');
	   exit;
	}
	else
	{
         $qry="SELECT * from enumerators where Username='$user' and Password='$encry'";
	     $a=mysql_query($qry) or die('Error in execution');
	     if($row=mysql_num_rows($a)>0) {
		 $_SESSION['logged-in']=true;
		 while($row=mysql_fetch_array($a)) {
		 $id=$row['Id_Enum'];
		 $_SESSION['Id_Enum']=$id;
		 $province=$row['ProvinceId'];
		 $_SESSION['province']=$province;
		 $district=$row['District_Id'];
		 $_SESSION['district']=$district;
		 $sector=$row['Sector_Id'];
		 $_SESSION['sector']=$sector;
		 $name=$row['Name_Enum'];
		 $_SESSION['name']=$name;
		 $last=$row['LN_Enum'];
		 $_SESSION['last']=$last;
		 $day=$row['Year_Of_census'];
	     $_SESSION['Year_Of_census']=$day;
		 		 }
         header('location:enum.php');
	        exit;

		 }
		 else
		{
		header('location:login.php');}
	
	}
	}
?>
