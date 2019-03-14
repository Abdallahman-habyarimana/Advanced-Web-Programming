<!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="css/sheet.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/enumstyling.css" media="all" />
<title> Census </title>
</head>

<body>
<div id="Content">
<header class="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</header>
<nav id="navmenu">
<ul>
<li> <a href="#">HOME</a><li>
<li><a href="#" onClick="javascript:showHiddenlist('heh')">LIST PEOPLE ENUMERATE </a>
<ul class="submenu" id="heh" >
                <li><a href="list.php"> HOUSE HOLD </a></li>
                <li><a href="list2.php"> POPULATION </a></li>
                
            </ul>
<li>
<li> <a href="#" onClick="javascript:showHiddenmenu('hid') ">LOGIN</a>

<ul class="submenu" id="hid">
                <li><a href="login.php"> ENUMERATOR </a></li>
                <li><a href="enumerator_login.php"> ADMINISTRATOR </a></li>
                
            </ul>
</li>
<li><a href="report.php"> REPORT IN PERCENTAGE</a></li>
<li> <a href=""> LOGOUT </a></li>
</ul>

</nav>

<section>
<div  id="Sectioncontent">
<h2> SIDE MENUS </h2>
</div>
<div  id="main">
<!--<div id="heawelcome">
<p> WELCOME TO NISR </p>
</div>-->
<form action="report.php" method="post">
<fieldset>
<select name="box1" id="box1" onChange="CheckDistrict();">
<option value="#"> Select Province </option>
<?

				require_once('db_connect.php');
                $query="SELECT *from village";
                $result=mysql_query($query) or ('Error in selection');
               
				while($row=mysql_fetch_array($result)){
?>
<option  value="<? echo $row['Id_Village'];?>"> <? if(isset($_GET['pro']) && $_GET['pro']==$row['Id_Village']) { ?> SELECTED <? }?> <? echo $row['Village'];
 ?> </option>
 <? 
 }
 ?>
 <input type="submit" name="submit" value="Search">
</select>
</fieldset>
</form>





</div>
<div id="contn">

</div>
<div id="divlast">
<img src="img/cens.jpg" width="340px" height="160px" align="middle">
</div>
</section>
<footer>
<div id="footest">

</div>
</footer>
</div>
</body>
</html>
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

function CheckDistrict()
{
var pro=document.getElementById('box1');
var dist=document.getElementById('box2');
var userid=document.getElementById('userid');

if(pro.value!=" && userid.value!=")
{
window.location.href.php?pro="+pro.value+"&userid="+userid.value;
}
else if(pro.value!=")
{
window.location.href="startpage.php?pro="+pro.value;
}
}


function Checksector()
{
var dist=document.getElementById('box2');
var pro=document.getElementById('box1');
var userid=document.getElementById('userid');

if(pro.value!="&& dist.value!= && userid.value!=")
{
window.location.href.php?pro="+pro.value+"&district="+dist.value+"&userid="+userid.value;
}
else if(pro.value!="&&dist.value!=")
{
window.location.href="startpage.php?pro="+pro.value+"&district="+dist.value;
}
}
</script>
