<?php
session_start();
require_once('db_connect.php');
if(isset($_POST['submit'])) {
$Idnumber=$_POST['idnumber'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$user=$_POST['user_name'];
$pass=$_POST['pass_word'];
$census_year=$_POST['census_year'];
$province=$_POST['province'];
$district=$_POST['district'];
$sector=$_POST['sector'];
$encry=md5($pass);

$query="SELECT * from enumerators where Username='$user'";
$result=mysql_query($query) or die('Error in execution');
if(mysql_num_rows($result)>0){
?>
<script type="text/javascript">
    alert('Username has already used');
    </script>
    <meta http-equiv="refresh" content="0; URL=admin.php" />
<?

}
else
{
$qry="INSERT into enumerators VALUES('$Idnumber','$fname','$lname','$phone','$user','$encry','$census_year','$province','$district','$sector')";
$rst=mysql_query($qry) or ('Error to Insert');
if($rst){
$message="OK WELCOME TO THE NISR AS ENUMERATOR UR USERNAME IS :$user AND PASSWORD :$pass ";
require_once('sendsms.php');
 SendSMS("localhost", 8800, "user", "pass", $phone, $message);
?>
<script type="text/javascript">
    alert('Successful Entered');
    </script>
    <meta http-equiv="refresh" content="0; URL=admin.php" />
<?
}
}
}
?>