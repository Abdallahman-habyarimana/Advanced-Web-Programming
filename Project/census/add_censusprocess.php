<?php
session_start();
require_once('db_connect.php');
if(isset($_POST['submit'])) {
$yearId=$_POST['yearId'];
$Start_Date=$_POST['Start_Date'];
$End_Date=$_POST['End_Date'];

list($year) = explode("-", $Start_Date);
$a=$year;
list($year1) = explode("-", $End_Date);
$b=$year1;
if(($b==$yearId)&&($a==$yearId)) {

$date1 = new DateTime($Start_Date);
    $date2 = new DateTime($End_Date);
if($date1 < $date2 )
{
$qry="INSERT into census_tb VALUES('$yearId','$Start_Date','$End_Date')";
$rst=mysql_query($qry) or ('Error to Insert');
if($rst){
?>
<script type="text/javascript">
    alert('Your are Successful Register the Date of The Income Census');
    </script>
    <meta http-equiv="refresh" content="0; URL=admin.php" />
<?
}
else
{

?>
<script type="text/javascript">
    alert('The Year is already in the database');
    </script>
    <meta http-equiv="refresh" content="0; URL=add_census.php" />
<?
}
}
else
{
?>
<script type="text/javascript">
    alert('Invalid Date');
    </script>
    <meta http-equiv="refresh" content="0; URL=add_census.php" />
<?
}   
}
else
{
?>
<script type="text/javascript">
    alert('The Year of the Date may be the same');
    </script>
    <meta http-equiv="refresh" content="0; URL=add_census.php" />
<?
}
}
?>