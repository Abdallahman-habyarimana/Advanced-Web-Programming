
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
<header class="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</header>
<nav id="navmenu">
<ul>
<li> <a href="../index.php">HOME</a></li>
<li> <a href="../report.php">REPORT</a></li>
</ul>

</nav>

<section>

          
          <fieldset>
         
               
 <table border="1" width="70%" height="auto">
                <tr>
               <td>  Number </td> <td>  NAME </td> <td> LAST NAME  </td> <td> SEX </td> <td> RELATIONSHIP  </td><td> RELIGION </td> <td> MARITAL STATUS </td><td> INSURANCE </td> <td> LANGUAGE </td> <td> DEGREE </td> <td> ACTIVITY </td> <td> WORK </td> <td> HOUSE ID</td> <td> DISTRICT NAME </td>
                </tr>      
<?

 $province=intval($_GET['province']);

$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('census');
$qy="SELECT * FROM province WHERE Id='$province'";
       $re=mysql_query($qy);
	    while($ro=mysql_fetch_array($re)){
	             
?>
 <h1 align="center"> LIST OF OF <?=$ro['Name']?></h1>
<? } ?>
<? 
       $query="SELECT * FROM household WHERE Id_Province='$province'";
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
                 
                <td> <?=$pop['Marital_statue']?> </td>
				  
				 
                 <td> <?=$pop['Religion']?> </td>
                 
                  <td> <?=$pop['Insurance']?> </td>
                  
                 <td> <?=$pop['Language']?> </td>
				  
				  <td> <?=$pop['Degree']?> </td>
                  
                  <td> <?=$pop['Activity']?> </td>
                  
                  <td> <?=$pop['Work']?> </td>
				  <td>   <?=$pop['House_Id']?> </td>
                 <? $a=$row['Id_district']; 
				  $q="SELECT *from district WHERE Id='$a'";
                  $r=mysql_query($q) or ('Error in selection');
				 while($p=mysql_fetch_array($r)){?>
                   <td>   <?=$p['districtname']?> </td> 
                 </tr>
	          <? } }} ?>

				 </table>
               <a href="../report.php">Back</a>
             
              </div>
                </form>
                 </fieldset>    
        

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

