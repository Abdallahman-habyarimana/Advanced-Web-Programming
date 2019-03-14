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
 <div class="hide" id="divtitle">
                 <h1 align="center"> REPUPLIC OF RWANDA </h1><br>
                             <img src="../img/logo.jpg" align="center"><br>
                          <h1 align="center"> NATIONAL INSTITUTE OF STATISTIC OF RWANDA </h1>

                      </div>

<div id="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</div>
<div id="Content">
<div id="navmenu">
<ul>
<li> <a href="admin.php">HOME</a><li>
<li><a href="admin.php?addenum=addenum">ADD ENUMERATOR </a></li>
<li> <a href="report.php">VIEW REPORT</a></li>
<li> <a href="list_enumerators.php"> LIST OF ENUMERATORS </a></li>
<li> <a href="logout.php"> LOGOUT </a></li>
</ul>

</div>
 <h1 align="center"> REPORT OF WHOLE POPULATION IN RELIGION </h1>
                <?php
				require_once('db_connect.php');
				?>
                
                <table>
                <tr>
               
                <th>  NAME OF PROVINCE </th> <th> ADVENTISTE  </th> <th> CATHOLIC  </th> <th> MUSLIM </th> <th> ANIMIST  </th><th> PROTESTANT </th><th>JEHOVAH  </th> <th>NO-RELIGION </th><th> TOTAL OF PERSON </th>
                </tr>
              
                <tr>
                <?
				$tcatholic=0;
				$tadventiste=0;
				$tmuslim=0;
				$tjehovah=0;
				$tprot=0;
				$tanim=0;
				$tnone=0;
				$ttotal=0;
				$qy="SELECT * FROM province";
                $re=mysql_query($qy);
	             while($ro=mysql_fetch_array($re)){
				 $idprovince=$ro['Id'];
				$catholic=0;
				$adventiste=0;
				$muslim=0;
				$jehovah=0;
				$prot=0;
				$anim=0;
				$none=0;
				$total=0;
				 // This is for selecting the Total number of Household
                
                $query="SELECT *from household where Id_province='$idprovince'";
                $res=mysql_query($query) or ('Error in selection');
                $house=0;
                while($row=mysql_fetch_array($res)){
				 $idhouse=$row['House_Id'];
                 $qy="SELECT *from population where House_Id='$idhouse'";
                $rs=mysql_query($qy) or ('Error in selection');
				 while($pp=mysql_fetch_array($rs)){
				 if($pp['Religion']=='Catholic')
				 {
				  $catholic=$catholic+1;
				  $total=$total+1;
				 }
				 else if($pp['Religion']=='Adventiste')
				 {
				  $adventiste=$adventiste+1;
				  $total=$total+1;
				 }
				 else if($pp['Religion']=='Muslim')
				 {
				  $muslim=$muslim+1;
				  $total=$total+1;
				 }
				 else if($pp['Religion']=='Jehovah Witness')
				 {
				  $jehovah=$jehovah+1;
				  $total=$total+1;
				 }
				  else if($pp['Religion']=='Protestant')
				 {
				  $prot=$prot+1;
				  $total=$total+1;
				 }
				  else if($pp['Religion']=='Tradi/Animist')
				 {
				  $anim=$anim+1;
				 $total=$total+1;
				 }
				 else
				 {
				      
					  $none=$none+1;
					  $total=$total+1;
				 }
				 }
				 }
                ?>
                
                <td>  
                 
                 
                 
                  <?=$ro['Name']?> </td>
				 <td>   <? echo $adventiste; ?> </td>
				 
                 <td> <?   echo $catholic; ?> </td>
				 
                 <td> <? echo $muslim; ?> </td>
				
				  <td> <?   echo $anim; ?> </td>
				 
                 <td> <? echo $prot; ?> </td>
                  <td> <? echo $jehovah; ?> </td>
                   <td> <? echo $none; ?> </td>
				    <td> <? echo $total; ?> </td>
                 </tr>
	<? 
	
	$tadventiste=$tadventiste+$adventiste;
	$tcatholic=$tcatholic+$catholic;
	$tmuslim=$tmuslim+$muslim;
	$tanim=$tanim+$anim;
	$tprot=$tprot+$prot;
	$tjehovah=$tjehovah+$jehovah;
	$tnone=$tnone+$none;
    $ttotal=$ttotal+$total;
	}
	
	
	
	?>
    <tr> <td> <h3> RWANDA </h3></td><td><? echo $tadventiste; ?> </td><td> <?   echo $tcatholic; ?> </td><td> <? echo $tmuslim; ?> </td><td> <?   echo $tanim; ?> </td><td> <? echo $tprot; ?> </td> <td> <? echo $tjehovah; ?> </td>
                   <td> <? echo $tnone; ?> </td>
				    <td> <? echo $ttotal; ?> </td></tr>
				 </table>
				 
                 
				 
                 
				
				  
				 
                 
                 
                 <div>
                <form action="residence/findRepReligion.php" method="post" name="form1" id="form1">
                
                <table width="60%" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                      
                               <td  width="150">
                                    <select name="province" onChange="getDistrict(this.value)">
                                     <option value="#"> -- Select Province-- </option>
                                    <option value="1"> KIGALI </option>
                                     <option value="5"> SOUTH</option>
                                      <option value="2"> NORTH</option>
                                      <option value="4"> EAST</option>
                                       <option value="3"> WEST</option>
                                    </select></td>
                                    
                                    
                                      <td width="150"><input type="submit" value="search" name="submit"> </td>
                                    
                                        <td width="150">  <input id="printpagebutton" type="button" value="Print this list" onClick="printpage()"/>  </a></td>                                   
                
                </tr>
                
    
                </table> </div>
                </form>
</div>
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
divtitle.style.visibility ='visible';
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


