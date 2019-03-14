<!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="sheet.css" media="all" />
<link type="text/css" rel="stylesheet" href="Enumerationprocess.css" media="all" />
<title> Census </title>
</head>

<body>
<div id="Content">
<header class="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</header>
<nav id="navmenu">
<ul>
<li> <a href="index.php">HOME</a><li>
<li><a href="list.php">LIST PEOPLE ENUMERATE </a>
<li>
<li> <a href="#" onClick="javascript:showHiddenmenu('hid') ">LOGIN</a>

<ul class="submenu" id="hid">
                <li><a href="enumerator_login.php"> ADMINISTRATOR </a></li>
            </ul>
</li>
<li> <a href=""> LOGOUT </a></li>
</ul>

</nav>

<section>

          
          <fieldset>
         
                <h1 align="center"> LIST OF OF HOUSEHOLD</h1>
                <?php
				session_start();
				require_once('db_connect.php');
				?>
                <table border="1" width="70%" height="auto">
                <tr>
                <td> HOUSEHOLD ID</td> <td> Family Members </td> <td> Type of Habitant </td><td> Type Of Building </td><td> Tenure </td><td> Material of roof </td><td> Material of wall </td><td> material of floor</td><td> Number of rooms </td><td> Number of bedrooms </td><td>Number of occumpant </td><td> Source water </td><td> Toilet facilty </td><td> Enery Light </td><td> Energy Cooking </td>
                </tr>
                <?
                $query="SELECT *from household";
                $res=mysql_query($query) or ('Error in selection');
                while($row=mysql_fetch_array($res)){
				?>
                <tr>
				 <td>   <? echo $row['House_Id']; ?> </td>
				 
                 <td> <?   echo $row['Nu.Members']; ?> </td>
				 
                 <td> <? echo $row['Ty_Habitant'];?> </td>
				 
				 <td> <?   echo $row['Ty_Building']; ?> </td>
				  
				 
                 <td> <?  echo $row['Tenure']; ?> </td>
                 
                  <td> <?   echo $row['Mat_Roof']; ?> </td>
				  
				 
                 <td> <?  echo $row['Mat_walls']; ?> </td>
                 
                  <td> <?   echo $row['Mat_Floor']; ?> </td>
				  
				 
                 <td> <?  echo $row['Nu_of_Rooms']; ?> </td>
                 
                 <td> <?  echo $row['Nu_of_bedroom']; ?> </td>
                 
                  <td> <?   echo $row['Nu_of_occupant']; ?> </td>
				  
				 
                 <td> <?  echo $row['So_water']; ?> </td>
                 
                 <td> <?  echo $row['Toi_facility']; ?> </td>
                 
                  <td> <?   echo $row['Energy_Light']; ?> </td>
				  
				 
                 <td> <?  echo $row['Energy_Cooking']; ?> </td>
				
                 </tr>
		<?
				}
                ?>
				 </table>
                 
                
            </fieldset>    
        

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
</script>


