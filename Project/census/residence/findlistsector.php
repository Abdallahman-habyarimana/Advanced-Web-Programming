<!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="../css/sheet.css" media="all" />
<link type="text/css" rel="stylesheet" href="../css/Enumerationprocess.css" media="all" />
<link type="text/css" rel="stylesheet" href="../css/table_design.css" media="all" />

<title> Census </title>
</head>

<body>
<div id="Content">
<header id="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</header>
<nav id="navmenu">
<ul>
<li> <a href="../admin.php">HOME</a><li>
<li><a href="../admin.php?addenum=addenum">ADD ENUMERATOR </a></li>
<li> <a href="report.php">VIEW REPORT</a></li>
<li> <a href="../list_enumerators.php"> LIST OF ENUMERATORS </a></li>
<li> <a href="../logout.php"> LOGOUT </a></li>
</ul>

</nav>

<section>

          
    
         
               
 <table>
                <tr>
               <th>  Number </th>  <th>  NAME </th> <th> LAST NAME  </th> <th> SEX </th> <th> RELATIONSHIP  </th><th> RELIGION </th> <th> MARITAL STATUS </th><th> INSURANCE </th> <th> LANGUAGE </th> <th> DEGREE </th> <th> ACTIVITY </th> <th> WORK </th> <th> HOUSE ID</th> <th> CELLNAME</th>
                </tr>      
<?

 $sector=intval($_GET['sector']);
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('census');
$qy="SELECT * FROM sector WHERE Id='$sector'";
       $re=mysql_query($qy);
	    while($ro=mysql_fetch_array($re)){
	             
?>
 <h1 align="center"> LIST OF OF <?=$ro['sectorname']?></h1>
<? } ?>
<? 
       $query="SELECT * FROM household WHERE Id_sector='$sector'";
       $result=mysql_query($query);
       while($row=mysql_fetch_array($result)){
	            $take=$row['House_Id'];
	            $qry="SELECT *from population WHERE House_Id='$take'";
                $res=mysql_query($qry) or ('Error in selection');
				 while($pop=mysql_fetch_array($res)){
                ?>
               
              
                <tr>
                <td>   <?=$pop['Id_Population']?> </td>
				 <td>   <?=$pop['Fname']?> </td>
				 
                 <td> <?=$pop['Lname']?> </td>
				 
                 <td> <?=$pop['Sex']?> </td>
				 
				 <td> <?=$pop['Relationship']?> </td>
                 
                 <td> <?=$pop['Religion']?> </td>
                 
                <td> <?=$pop['Marital_statue']?> </td>
				  
				 
                 
                 
                  <td> <?=$pop['Insurance']?> </td>
                  
                 <td> <?=$pop['Language']?> </td>
				  
				  <td> <?=$pop['Degree']?> </td>
                  
                  <td> <?=$pop['Activity']?> </td>
                  
                  <td> <?=$pop['Work']?> </td>
				  <td>   <?=$pop['House_Id']?> </td>  
				  <? $a=$row['Cell_Id']; 
				  $q="SELECT *from cell WHERE Id='$a'";
                  $r=mysql_query($q) or ('Error in selection');
				 while($p=mysql_fetch_array($r)){?>
                   <td>   <?=$p['Cell']?> </td> 
                 </tr>
	          <? } }} ?>
              
				 </table>
               <a href="../report.php">Back</a>
                 
      
              
                
                
        

</section>
<footer>
<div id="footest">

</div>
</footer>
</div>
</body>
</html>
<script type="text/javascript" language="javascript">
function showHiddenmenu(layer){
var myLayer = document.getElementById(layer);
if(myLayer.style.display=="none" || myLayer.style.display==""){
myLayer.style.display="block";
} else {
myLayer.style.display="none";
}
}
	
</script>

