<? 
session_start();
				if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){

?>
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
<li> <a href="report.php">REPORT</a></li>
</ul>

</nav>

<section>

          
          <fieldset>
         
               
      
<? $province=intval($_POST['province']);
   $district=intval($_POST['district']);
   $sector=intval($_POST['sector']);
require_once('../db_connect.php');
$qy="SELECT * FROM province WHERE Id='$province'";
       $re=mysql_query($qy);
	    while($ro=mysql_fetch_array($re)){
	             
?>
 <h1 align="center"> LIST OF OF <h2> <?=$ro['Name']?></h2></h1>
<? } ?>
<?
                $count=0;
                $male=0;
                $female=0;
				$ten=0;
				$s=0;
				$n=0;
				$house=0;
				$total=0;
       $query="SELECT * FROM household WHERE Id_Province='$province' AND Id_district='$district' AND Id_sector='$sector'";
       $result=mysql_query($query);
       while($row=mysql_fetch_array($result)){
	             $house=$house+1;
				$take=$row['House_Id'];
				$count=$row['Nu.Members'];
				$total=$total+$count;
	            $qry="SELECT *from population WHERE House_Id='$take'";
                $res=mysql_query($qry) or ('Error in selection');
				 while($pop=mysql_fetch_array($res)){
                if($pop['Sex']=='Male')
                {
                $male=$male+1;
                }
                if($pop['Sex']=='Female')
                {
                $female=$female+1;
                }
                }
			}
			if($total==0)
				{ ?>
                <script type="text/javascript">
               alert(' U have no report');
               </script>
               <meta http-equiv="refresh" content="0; URL=findRepDistrict.php" />
                
                <?
				
				}
				else
				{
                $pmale=($male*100)/$total;
                $pfemale=($female*100)/$total;
				}
                ?>
                <table border="1" width="70%" height="auto">
                <tr>
                <td>  TOTAL OF HOUSEHOLD </td> <td> TOTAL OF PERSON  </td> <td> TOTAL OF WOMAN  </td><td> PERCENTAGE WOMEN </td><td> TOTAL OF MAN </td><td> PERCENTAGE MEN  </td> 
                </tr>
              
                <tr>
				 <td>   <? echo $house; ?> </td>
				 
                 <td> <?   echo $total; ?> </td>
				 
                 <td> <? echo $male; ?> </td>
				 
				 <td> <?   echo $pmale; ?> </td>
                 
             
				  
				 
                 <td> <?  echo $female; ?> </td>
                 
                  <td> <?   echo $pfemale; ?> </td>
                  
                 
				  
				  
				  
                 </tr>
	
				 </table>
             <form action="" method="post">
               <?
			     $jqy="SELECT * FROM cell WHERE Id_Province='$province' AND Id_district='$district' AND Id_sector='$sector'";
                        $jre=mysql_query($jqy);
	                   
			    ?>
     
                <table width="60%" border="0" cellspacing="0" cellpadding="0">
                                      <td width="150"><input type="hidden" value="<?=province?>" name="province" > </td> 
                                      <td width="150"><div id="districtdiv">
                                        <select name="cell" >
                                        <option>-- Select cell First-- </option>
                                        <? while($jro=mysql_fetch_array($jre)){ ?>
                                        <option value="<?=$jro['Id']?>"><?=$jro['Cell']?></option> <? }?>
                                         </select> </div></td>
                            <td width="150"><input type="submit" value="search" name="submit"> </td>
                                   <td width="150">
                                         </td>
                                          <td width="150"> <a href="findlistsector.php?sector=<?=$sector?>"> View Sector List </a> </td>
                                           
                </tr>
                </table> </div>
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
<?
}
else
{
echo "Please this page can not open while Your are not logged in................";
echo '<a href="../index.php"> Back to Log In</a>';
}
?>
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

