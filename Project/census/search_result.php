<? 
if(isset($_POST['submit'])){
require_once('db_connect.php');
$search=$_POST['search'];

$query="SELECT *FROM population WHERE House_Id='$search'";
$result=mysql_query($query);


?>

<!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="css/sheet.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/enumstlying.css" media="all"/>
<link type="text/css" rel="stylesheet" href="css/table_design.css" media="all"/>
<title> Census </title>
</head>

<body>

<div id="heading">
</div>
<div id="Content">
<div id="navmenu">
<ul>
<li> <a href="index.php"><span> HOME</span></a> <li>
<li><a href="report.php"><span>REPORT</span></a></li>
<li><a href="#"><span>SEARCH</span></a></li>
<li><a href="#"><span>ABOUT US</span></a></li>
<li> <a href="login.php"><span>LOGIN</span></a></li>
</ul>

</div>

<div  id="Sectioncontent">
<ul>
   <li class='active '><a href='#'><span>Home</span></a></li>
   <li><a href='report.php'><span>REPORT</span></a></li>
   <li><a href='#'><span>SEARCH</span></a></li>
   <li><a href='#'><span></span></a></li>
</ul>

</div>
<div id="heawelcome">
<p> WELCOME TO NISR </p>
</div>
<div  id="main">

<table width="20px">
<tr>
<th> Name </th>
<th> Last-Name</th>
<th> Sex </th>
<th> DATE OF BIRTH</th>
</tr>
<? while($row=mysql_fetch_array($result)){?>
<tr>
<td> <?=$row['Fname']?></td>
<td> <?=$row['Lname']?></td>
<td> <?=$row['Sex']?></td>
<td> <?=$row['Dob']?></td>
<td> <?=$row['Fname']?></td>
<td> <?=$row['Lname']?></td>
<td> <?=$row['Sex']?></td>
<td> <?=$row['Dob']?></td>
<td> <?=$row['Fname']?></td>
<td> <?=$row['Lname']?></td>
<td> <?=$row['Sex']?></td>
<td> <?=$row['Dob']?></td>
<? }?>
</tr>
</table>
</div>
</div>
<div id="footest">
<p> 2013 COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved
</div>
</div>
</body>
</html>
<?
}
?>
<script type="text/javascript">
function showHiddenmenu(layer){
var myLayer = document.getElementById(layer);
if(myLayer.style.display=="none" || myLayer.style.display==""){
myLayer.style.display="block";
} else {
myLayer.style.display="none";
}
}

function showHiddenlist(layer){
var myLayer = document.getElementById(layer);
if(myLayer.style.display=="none" || myLayer.style.display==""){
myLayer.style.display="block";
} else {
myLayer.style.display="none";
}
}
</script>
