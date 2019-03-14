<? 
session_start();
				if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){

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
                <h1 align="center"> REPORT OF WHOLE POPULATION IN INSURANCE</h1>
                <?php
				require_once('db_connect.php');
				?>
                
                <table>
                <tr>
               
                <th>  NAME OF PROVINCE </th><th> SEEING  </th> <th> SPEAKING  </th>  <th>HEARING</th> <th> LEARNING/CONCENTRATING </th> <th>WALKING/CLIMBING  </th><th>NONE  </th><th> TOTAL OF PERSON </th>
                </tr>
              
                <tr>
                <?
				$tSeeing=0;
				$tHearing=0;
				$tSpeaking=0;
				$twalking=0;
				$tlearning=0;
				$tnone=0;
				$ttotal=0;
				$qy="SELECT * FROM province";
                $re=mysql_query($qy);
	             while($ro=mysql_fetch_array($re)){
				 $idprovince=$ro['Id'];
				$Seeing=0;
				$Hearing=0;
				$Speaking=0;
				$walking=0;
				$learning=0;
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
				 if($pp['Insurance']=='Seeing')
				 {
				  $Seeing=$Seeing+1;
				  $total=$total+1;
				 }
				 else if($pp['Problem']=='Hearing')
				 {
				  $Hearing=$Hearing+1;
				  $total=$total+1;
				 }
				 else if($pp['Problem']=='Speaking')
				 {
				  $Speaking=$Speaking+1;
				  $total=$total+1;
				 }
				 else if($pp['Problem']=='Walking/Climbing')
				 {
				  $walking=$walking+1;
				  $total=$total+1;
				 }
				  else if($pp['Problem']=='Learning/Concentrating')
				 {
				  $learning=$learning+1;
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
				 <td>  
                 
                 
                 
                  <? echo $Seeing; ?> </td>
				 
                 <td> <?   echo $Speaking; ?> </td>
				 
                 <td> <? echo $Hearing; ?> </td>
				
				  <td> <?   echo $learning; ?> </td>
				 
                 <td> <? echo $walking; ?> </td>
       
                   <td> <? echo $none; ?> </td>
				    <td> <? echo $total; ?> </td>
                 </tr>
	<? 
	
	$tSeeing=$tSeeing+$Seeing;
	$tSpeaking=$tSpeaking+$Speaking;
	$tHearing=$tHearing+$Hearing;
	$tlearning=$tlearning+$learning;
	$twalking=$twalking+$walking;
	$tnone=$tnone+$none;
    $ttotal=$ttotal+$total;
	}
	
	
	
	?>
    <tr> <td> <h3> RWANDA </h3></td><td> <? echo $tSeeing; ?> </td> <td> <?   echo $tSpeaking; ?></td> <td> <? echo $tHearing; ?> </td> <td> <?   echo $tlearning; ?> </td><td>  <? echo $twalking; ?></td><td> <? echo $tnone; ?> </td> <td> <? echo $ttotal; ?> </td></tr>
				 </table>
                 <div>
                <form action="residence/findRepProblem.php" method="post" name="form1" id="form1">
                
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

</section>
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
</div>
<div id="footest">
<p> COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved </p>
</div>

</body>


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


