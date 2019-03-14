 <?php
				session_start();
				if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){
				require_once('db_connect.php');
				
				$id=$_SESSION['Id_Enum'];
				$eday=$_POST['eday'];
				 $count=0;
                $male=0;
                $female=0;
				$house=0;
				$total=0;
				$query="SELECT *from household where Id_Enum='$id' and Date='$eday'";
                $res=mysql_query($query) or ('Error in selection');
                
				
                while($row=mysql_fetch_array($res)){
                $house=$house+1;
				$take=$row['House_Id'];
				$count=$row['Nu.Members'];
				$total=$total+$count;
                 $qry="SELECT *from population where House_Id='$take'";
                $resu=mysql_query($qry) or ('Error in selection');
               
                while($row=mysql_fetch_array($resu)){
                if($row['Sex']=='Male')
                {
                $male=$male+1;
                }
                if($row['Sex']=='Female')
                {
                $female=$female+1;
                }
                }
                // This is for selecting the Total number of Household
                }
               if($total==0)
				{ ?>
                <script type="text/javascript">
               alert(' U have no report');
               </script>
               <meta http-equiv="refresh" content="0; URL=dayreport.php" />
                
                <?
				
				}
				else
				{
                $pmale=($male*100)/$total;
                $pfemale=($female*100)/$total;
				}
                ?>
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
<li> <a href="admin.php">HOME</a><li>
<li><a href="enumeratorregister.php">ADD ENUMERATOR </a></li>
<li> <a href="#" onClick="javascript:showHiddenmenu('hid') ">VIEW REPORT </a>
<ul class="submenu" id="hid">
 <li> <a href="dayreport.php"> TOTAL </a> </li>
 <li> <a href="#"> ALL AND DATE </a> </li>
 </ul>
</li>
<li> <a href="logout.php"> LOGOUT </a></li>
</ul>

</nav>

<section>

          
          <fieldset>
         
                <h1 align="center"> TOTAL REPORT </h1>
               
                <table border="1" width="70%" height="auto">
                <tr>
                <td>  TOTAL OF HOUSEHOLD </td> <td> TOTAL OF PERSON  </td> <td> TOTAL OF WOMAN  </td><td> PERCENTAGE WOMEN </td><td> TOTAL OF MAN </td><td> PERCENTAGE MEN  </td>
                </tr>
              
                <tr>
				 <td>   <? echo $house; ?> </td>
				 
                 <td> <?   echo $total; ?> </td>
				 
                 <td> <? echo $female; ?> </td>
				 
				 <td> <?   echo $pfemale; ?> </td>
                 
             
				  
				 
                 <td> <?  echo $male; ?> </td>
                 
                  <td> <?   echo $pmale; ?> </td>
				  
                 </tr>
	
				 </table>
                 
            </fieldset>    
        

</section>
<footer>
<div id="footest">

</div>
</footer>
</div>
</body>
<?
}
?>
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


