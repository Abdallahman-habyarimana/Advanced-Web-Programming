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
<? $province=intval($_POST['province']);?>
<div class="hide" id="divtitle">
<h1 align="center"> REPUPLIC OF RWANDA </h1><br>
<img src="../img/logo.jpg" align="center"><br>
<h1 align="center"> NATIONAL INSTITUTE OF STATISTIC OF RWANDA </h1>

</div>
  <table>
                <tr>
               <th>  NAME OF PROVINCE </th> <th> UMUDUGUDU  </th> <th> OLD SETTLEMENT  </th> <th> OWNER  </th> <th> TENANT </th><th> Electricity by EWSA </th><th> Hydro-electric or other private source </th><th> solar power </th><th>  Internal pipe-born water</th><th>  Rain Water</th><th>  Flush toilet/water closet(WC)system</th><th> Private pit latrine </th><th> Public pit latrine </th>
                </tr>
                <?
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('census');
// Variable that Hold the Total
			           $tumudugudu=0;
				$told=0;
				$towner=0;
				$ttenant=0;
				$tinternal=0;
				 
                 $train=0;
				
				 $tfacility=0;
                  
                $tprivate=0 ;
				 
                 $tpublic=0;
				
				 $tewsa=0;
				  
                 $thydro=0;
				
				 $tsolar=0;      
$qy="SELECT * FROM province WHERE Id='$province'";
       $re=mysql_query($qy);
	    while($ro=mysql_fetch_array($re)){
		$idprovince=$ro['Id'];
		$name=$ro['Name']
		
	             
?>
 <h1 align="center"> LIST OF OF <?=$ro['Name']?> </h1>

<? } ?><?
                
		
		//Select from District
				
          $jqy="SELECT * FROM district WHERE Id_Province='$idprovince'";
               $jre=mysql_query($jqy);
	            while($jro=mysql_fetch_array($jre)){
                $iddistrict=$jro['Id'];
				$umudugudu=0;
				$old=0;
				$owner=0;
				$tenant=0;
				$internal=0;
				 
                 $rain=0;
				
				 $facility=0;
                  
                $private=0 ;
				 
                 $public=0;
				
				 $ewsa=0;
				  
                 $hydro=0;
				
				 $solar=0;
				
				$dd="SELECT * FROM sector WHERE Id_district='$iddistrict'";
               $jj=mysql_query($dd);
	            while($jlo=mysql_fetch_array($jj)){
                $idsector=$jlo['Id'];
				 // This is for selecting the Total number of Household
                
                $query="SELECT *from household where Id_district='$iddistrict' AND Id_sector='$idsector'";
                $res=mysql_query($query) or ('Error in selection');
                while($row=mysql_fetch_array($res)){
				  if($row['Ty_Habitant']=="umudugudu")
				 {
				  $umudugudu=$umudugudu+1;
				 }
				 else if($row['Ty_Habitant']=="Old settlement")
				 {
				      
					  $old=$old+1;
				 }
			     else 
				 {
				 
				 }
				   if($row['Tenure']=="owner")
				 {
				  $owner=$owner+1;
				 }
				 else if($row['Tenure']=="tenant")
				 {
				      
					  $tenant=$tenant+1;
				 }
				 else
				 {
				 
				 }
				 
				  if($row['So_water']=="Internal pipe-born water")
				 {
				  $internal=$internal+1;
				 }
				 else if($row['So_water']=="Rain Water")
				 {
				      
					  $rain=$rain+1;
				 }
				 else
				 {
				 
				 }
				 
				  if($row['Toi_facility']=="Flush toilet/water closet(WC)system")
				 {
				  $facility=$facility+1;
				 }
				 else if($row['Toi_facility']=="Private pit latrine")
				 {
				      
					  $private=$private+1;
				 }
				 else
				 {
				 $public=$public+1;
				 }
				 
				  if($row['Energy_Light']=="Electricity by EWSA")
				 {
				  $ewsa=$ewsa+1;
				 }
				 else if($row['Energy_Light']=="Hydro-electric or other private source")
				 {
				      
					  $hydro=$hydro+1;
				 }
				 else
				 {
				 $solar=$solar+1;
				 }
				  }
				  }
				 
                ?>
                
                <td>  
                 
                 
                 
                  <?=$jro['districtname']?> </td>
				 <td>  
                 
                 
                 
                  <? echo $umudugudu; ?> </td>
				 
                 <td> <?   echo $old; ?> </td>
				 
                 <td> <? echo $owner; ?> </td>
				
				  <td> <?   echo $tenant; ?> </td>
                   <td> <?   echo $ewsa; ?> </td>
                  
                  <td> <? echo $hydro; ?> </td>
                  
                  <td> <?   echo $solar; ?> </td>
                   <td> <?   echo $internal; ?> </td>
				 
                 <td> <? echo $rain; ?> </td>
				
				  <td> <?   echo $facility; ?> </td>
                  
                   <td> <?   echo $private; ?> </td>
				 
                 <td> <? echo $public; ?> </td>
				  
                 </tr>
	<? 
	$tumudugudu=$tumudugudu+$umudugudu;
	$told=$told+$old;
	$towner=$towner+$owner;
	$ttenant=$ttenant+$tenant;
    $tinternal=$tinternal+$internal;
	$rain=$train+$rain;
	$tfacility=$tfacility+$facility;
	$tprivate=$tprivate+$private;
	$tpublic=$tpublic+$public;
	$tewsa=$tewsa+$ewsa;
	$hydro=$thydro+$hydro;
	$tsolar=$tsolar+$solar;

	}
	
	
	
	?>
    <tr> <td> <h3> <? echo $name; ?> </h3></td><td> <? echo $tumudugudu; ?> </td> <td> <? echo $told; ?></td> <td> <? echo $towner; ?> </td> <td> <? echo $ttenant; ?></td>  <td> <?   echo $tewsa; ?> </td> <td> <? echo $thydro; ?> </td><td> <?   echo $tsolar; ?> </td><td> <?   echo $internal; ?> </td>
				 
                 <td> <? echo $train; ?> </td>
				
				  <td> <?   echo $tfacility; ?> </td>
                  
                   <td> <?   echo $tprivate; ?> </td>
				 
                 <td> <? echo $tpublic; ?> </td>
				
				</tr>
				  
				 </table>
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

 <table>
 <tr>
 <td>
  
 <a href="../report_household.php">  Back </a>                   
 
  <input id="printpagebutton" type="button" value="Print this list" onClick="printpage()"/>  </td>                   
                             
                 <td>
             <form action="FindRepSectorHousehold.php" method="post" id="form1">
               <?
			     $jqy="SELECT * FROM district WHERE Id_Province='$province'";
                        $jre=mysql_query($jqy);
	                   
			    ?>
     
               
                                    <input type="hidden" value="<?=$province?>" name="province" > 
                                    <div id="districtdiv">
                                        <select name="district" >
                                        <option>-- Select District First-- </option>
                                        <? while($jro=mysql_fetch_array($jre)){ ?>
                                        <option value="<?=$jro['Id']?>"><?=$jro['districtname']?></option> <? }?>
                                         </select> </div>
                                         </td>
                                         <td>
                            <input type="submit" value="search" name="submit"> 
                                   
                                            </form>
                                          
                       </td>
                       </tr>                  
                      

                </table> 
             
                  
        

</div>
</div>
<?
}
else
{
echo "Please this page can not open while Your are not logged in................";
echo '<a href="../index.php"> Back to Log In</a>';
}
?>
<div id="footest">
<p> COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved </p>
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

