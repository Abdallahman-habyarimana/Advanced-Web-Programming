 <?php
				session_start();
				if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){
				require_once('db_connect.php');
				
				$id=$_SESSION['Id_Enum'];
				 $count=0;
                $male=0;
                $female=0;
				$house=0;
				$total=0;
				$query="SELECT *from household where Id_Enum='$id'";
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
               <meta http-equiv="refresh" content="0; URL=Enumerationprocess.php" />
                
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
<link type="text/css" rel="stylesheet" href="css/sheet.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/Enumerationprocess.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/table_design.css" media="all" />
<title> Census </title>
</head>

<body>

<div id="heading">
</div>
<div id="Content">
<div id="navmenu">
<ul>
<li> <a href="admin.php"><span>HOME<span></a><li>
<li><a href="Enumerationprocess.php"><span>ADD ENUMERATOR<span> </a></li>
<li> <a href="dayreport.php"><span>VIEW REPORT<span> </a>
<li> <a href="logout.php"> LOGOUT </a></li>
</ul>

</div>
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
                 
                <form action="enusearch.php" method="post">
                <label> Enter the date You want </label>
                <input type="text" name="eday"> 
                 <input type="submit" value="SEARCH" name="submit">
                </form>
            </fieldset>    
        
</div>
<div id="footest">
<p> COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved </p>
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


