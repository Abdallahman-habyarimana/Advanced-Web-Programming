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
<div id="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</div>
<div id="content">
<div id="navmenu">
<ul>
<li> <a href="../admin.php">HOME</a><li>
<li><a href="../admin.php?addenum=addenum">ADD ENUMERATOR </a></li>
<li> <a href="report.php">VIEW REPORT</a></li>
<li> <a href="../list_enumerators.php"> LIST OF ENUMERATORS </a></li>
<li> <a href="../logout.php"> LOGOUT </a></li>
</ul>

</div>

<section>
                     
<? $province=intval($_POST['province']);
   $district=intval($_POST['district']);
   ?>
 <table>
                <div class="hide" id="divtitle">
                 <h1 align="center"> REPUPLIC OF RWANDA </h1><br>
                             <img src="../img/logo.jpg" align="center"><br>
                          <h1> NATIONAL INSTITUTE OF STATISTIC OF RWANDA </h1>
                <tr>
                <th>  PROVINCE </th> <th> MALE  </th> <th> FEMALE  </th> <th> NON-INSURANCE </th><th> INSURANCE  </th> <th>NON-RELIGION  </th> <th> MUSLIM </th><th>CHRISTIAN  </th><th>TOTAL </th><th> #</th>
                </tr>
                <?
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('census');
// Variable that Hold the Total
			            $tmale=0;
	                    $tfemale=0;
	                    $tnone=0;
	                    $tinsu=0;
	                    $trnone=0;
	                    $tmusl=0;
                     	$tchr=0;
                     	$tperson=0;
				        
$qy="SELECT * FROM district WHERE Id='$district'";
       $re=mysql_query($qy);
	    while($ro=mysql_fetch_array($re)){
		$iddistrict=$ro['Id'];
		$name=$ro['districtname']
		
	             
?>
 <h1 align="center"> LIST OF OF <?=$ro['districtname']?> </h1>

<? } ?><?
                
		
		//Select from District
				
          $jqy="SELECT * FROM sector WHERE Id_district='$iddistrict'";
               $jre=mysql_query($jqy);
	            while($jro=mysql_fetch_array($jre)){
                $idsector=$jro['Id'];
				$count=0;
                $male=0;
                $female=0;
				$house=0;
				$total=0;
				$none=0;
				$insu=0;
				$chr=0;
				$musl=0;
				$rnone=0;
				$frm=0;
				$dd="SELECT * FROM cell WHERE Id_sector='$idsector'";
               $jj=mysql_query($dd);
	            while($jlo=mysql_fetch_array($jj)){
                $idcell=$jlo['Id'];
				{
				
				
				 // This is for selecting the Total number of Household
                
                $query="SELECT *from household where Cell_id='$idcell' AND Id_sector='$idsector'";
                $res=mysql_query($query) or ('Error in selection');
                while($row=mysql_fetch_array($res)){
				 $idhouse=$row['House_Id'];
                 $qy="SELECT *from population where House_Id='$idhouse'";
                $rs=mysql_query($qy) or ('Error in selection');
				 while($pp=mysql_fetch_array($rs)){
			      if($pp['Sex']=='Male')
                {
                $male=$male+1;
				$frm=$frm+1;
                }
                if($pp['Sex']=='Female')
                {
                $female=$female+1;
				$frm=$frm+1;
                }
				
				// Check Whether having Insurance or Not
				
				
				if($pp['Insurance']=='None')
				{
				$none=$none+1;
				}
				else
				{
				 $insu=$insu+1;
				}
				
				// Check Number of Christian Number and Non Christian Number
				
				if($pp['Religion']=='None')
				{
				$rnone=$rnone+1;
				}
				else if($pp['Religion']=='Muslim')
				{
				 $musl=$musl+1;
				}
				else 
				{
				$chr=$chr+1;
				}    
				     } }   } }?>
                            
              
              
                <tr>
				 <td>   <? echo $jro['sectorname']; ?> </td>
				 
 
				 
                 <td> <? echo $male; ?> </td>
				 
				
                 
             
				  
				 
                 <td> <?  echo $female; ?> </td>
                 
              
                  
                 <td> <?  echo $none; ?> </td>
                 
                  <td> <?   echo $insu; ?> </td>
				  
				   <td> <?   echo $rnone; ?> </td>
                  
                 <td> <?  echo $musl; ?> </td>
                 
                  <td> <?   echo $chr; ?> </td>
                  
                  <td> <?   echo $frm; ?> </td>
				
                   <td id="ddddd"> <a href="findlistSector.php?sector=<?=$jro['Id']?>"> View List </a> </td>	  
                 </tr>
	<? 
	
	
	$tmale=$tmale+$male;
	$tfemale=$tfemale+$female;
	$tnone=$tnone+$none;
	$tinsu=$tinsu+$insu;
	$trnone=$trnone+$rnone;
	$tmusl=$tmusl+$musl;
	$tchr=$tchr+$chr;
	$tperson=$tmale+$tfemale;
	
	}
	
	
	?>
    <tr> <td> <h3> <?=$name?> </h3></td><td> <? echo $tmale; ?> </td> <td> <? echo $tfemale; ?></td> <td> <? echo $tnone; ?> </td><td><? echo $tinsu; ?>  </td> <td> <? echo $trnone; ?></td> <td> <? echo $tmusl; ?></td> <td> <? echo $tchr; ?></td> <td colspan="2"> <? echo $tperson; ?></td> </tr>
	
				 </table> 
                <a href="../report.php"> Back </a>  

</div>
</div>
<div id="footest">
<p> COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved </p>
</div>

</body>
<script type="text/javascript">                 
    function printpage() {
//Get the print button and put it into a variable
var printButton = document.getElementById("printpagebutton");
var divtitle=document.getElementById("divtitle");
var navmenu =document.getElementById("navmenu");
var heading =document.getElementById("heading");
var form1=document.getElementById("form1");
//Set the print button visibility to 'hidden'
printButton.style.visibility = 'hidden';
navmenu.style.visibility ='hidden';
heading.style.visibility ='hidden';
form1.style.visibility='hidden';
divtitle.style.visibility='visible';
//Print the page content
window.print()
//Set the print button to 'visible' again
//[Delete this line if you want it to stay hidden after printing]
divtitle.style.visibility='hidden';
printButton.style.visibility = 'visible';
navmenu.style.visibility ='visible';
heading.style.visibility ='visible';
form1.style.visibility='visible';
}
</script>
</html>
<?
}
else
{
echo "Please this page can not open while Your are not logged in................";
echo '<a href="index.php"> Back to Log In</a>';
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
