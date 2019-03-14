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
               
                <th>  NAME OF PROVINCE </th><th> WORK </th> <th> JOBLESS  </th>  <th> PUBLIC </th> <th> PRIVATE </th> <th> NO-PROFIT INSTITUTION  </th><th>Household</th><th> TOTAL OF PERSON </th>
                </tr>
              
                <tr>
                <?
				$tnon=0;
				$tpublic=0;
				$tprivate=0;
				$tprofit=0;
				$thouse=0;
				$tyes=0;
				$ttotal=0;
				$qy="SELECT * FROM province";
                $re=mysql_query($qy);
	             while($ro=mysql_fetch_array($re)){
				 $idprovince=$ro['Id'];
				$non=0;
				$public=0;
				$private=0;
				$profit=0;
				$house=0;
				$yes=0;
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
				 if($pp['Work']=='Yes')
				 {
				  $yes=$yes+1;
				  $total=$total+1;
				 }
				 else 
				 {
				  $non=$non+1;
				  $total=$total+1;
				 }
				 
				 
				 if($pp['Institution']=='Public'){
				 $public=$public+1;
				 
				 }
				 else if($pp['Institution']=='Private')
				 {
				  $private=$private+1;
				  
				 }
				 else if($pp['Institution']=='Non-Profit institution')
				 {
				  $profit=$profit+1;
				  
				 }
				  else 
				 {    
					  $house=$house+1;
				 }
				 }
				 }
                ?>
                
                <td>  
                 
                 
                 
                  <?=$ro['Name']?> </td>
				 <td>
                  <? echo $yes; ?> </td>
				 
                 <td> <?   echo $non; ?> </td>
				 
                 <td> <? echo $public; ?> </td>
				
				  <td> <?   echo $private; ?> </td>
				 
                 <td> <? echo $profit; ?> </td>
       
                   <td> <? echo $house; ?> </td>
				    <td> <? echo $total; ?> </td>
                 </tr>
	<? 
	
	$tyes=$tyes+$yes;
	$tnon=$tnon+$non;
	$tpublic=$tpublic+$public;
	$tprivate=$tprivate+$private;
	$tprofit=$tprofit+$profit;
	$thouse=$thouse+$house;
    $ttotal=$ttotal+$total;
	}
	
	
	
	?>
    <tr> <td> <h3> RWANDA </h3></td><td><? echo $tyes; ?> </td> <td> <?   echo $tnon; ?> </td> <td> <? echo $tpublic; ?> </td><td> <?   echo $tprivate; ?> </td><td> <? echo $tprofit; ?> </td> <td> <? echo $thouse; ?> </td>
				    <td> <? echo $ttotal; ?> </td></tr>
				 </table>
                 <div>
                <form action="residence/findRepWork.php" method="post" name="form1" id="form1">
                
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


