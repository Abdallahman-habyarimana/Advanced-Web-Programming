<? 
session_start();


				if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){
				$date1=date('Y-m-d');
		$day=$_SESSION['Year_Of_census'];
		require_once('db_connect.php');
		 $query="SELECT *FROM census_tb WHERE Year_Census='$day'";
         $result=mysql_query($query);
		 while($row=mysql_fetch_array($result)) {
		 $date2=$row['End_Census'];
		 }
		
          if($date1>$date2 )
         {
      
     ?>
     <script type="text/javascript">
      alert('U can not Login While The Census is Finished');
     </script>
    <meta http-equiv="refresh" content="0; URL=login.php" />
    <?
	}
	else
	{		

?>
<!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="css/sheet.css" media="all" />
<title> Census </title>
</head>

<body>
<div id="heading">
</div>
<div id="Content">
<div id="navmenu">
<ul>
<li> <a href="enum.php"><span>HOME</a><li>
<li><a href="Enumerationprocess.php"><span>STARTING ENUMERATE <span></a></li>
<li><a href="dayreport.php"><span>VIEW YOUR REPORT <span></a></li>
<li> <a href="logout.php"><span> LOGOUT </span></a></li>
</ul>

</div>
<div id="Container">
<div  id="Sectioncontent">

</div>
<div id="heawelcome1">
<p> WELCOME TO NISR </p>
</div>
<div  id="main1">
<br><br><br><br>
<p align="center"> <h5 align="center"> Welcome <?=$_SESSION['name']?> <?=$_SESSION['last']?> As Enumerator to the </h5><h3 align="center"> COMPUTERIZED NATIONAL CENSUS </h3> </p>
</div>

</div>

</div>
<div id="footest">
<p> COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved </p>
</div>

</body>
</html>
<?
}
}
else
{
echo "Please this page can not open while Your are not logged in................";
echo '<a href="index.php"> Back to Log In</a>';
}
?>
