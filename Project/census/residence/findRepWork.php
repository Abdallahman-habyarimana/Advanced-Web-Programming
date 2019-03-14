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
</div>
<div id="Content">
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
                 <th>  NAME OF PROVINCE </th><th> WORK </th> <th> JOBLESS  </th>  <th> PUBLIC </th> <th> PRIVATE </th> <th> NO-PROFIT INSTITUTION  </th><th>Household</th><th> TOTAL OF PERSON </th>
                </tr>
                <?
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('census');
// Variable that Hold the Total
	$tnon=0;
				$tpublic=0;
				$tprivate=0;
				$tprofit=0;
				$thouse=0;
				$tyes=0;
				$ttotal=0;
				        
$qy="SELECT * FROM province WHERE Id='$province'";
       $re=mysql_query($qy);
	    while($ro=mysql_fetch_array($re)){
		$idprovince=$ro['Id'];
		$name=$ro['Name']
		
	             
?>
 <h1 align="center">TOTAL OF RELIGION IN <?=$ro['Name']?> </h1>

<? } ?><?
                
		
		//Select from District
				
          $jqy="SELECT * FROM district WHERE Id_Province='$idprovince'";
               $jre=mysql_query($jqy);
	            while($jro=mysql_fetch_array($jre)){
                $iddistrict=$jro['Id'];
				$non=0;
				$public=0;
				$private=0;
				$profit=0;
				$house=0;
				$yes=0;
				$total=0;
				$dd="SELECT * FROM sector WHERE Id_district='$iddistrict'";
               $jj=mysql_query($dd);
	            while($jlo=mysql_fetch_array($jj)){
                $idsector=$jlo['Id'];
				{
				
				
				 // This is for selecting the Total number of Household
                
                $query="SELECT *from household where Id_district='$iddistrict' AND Id_sector='$idsector'";
                $res=mysql_query($query) or ('Error in selection');
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
				 }
				 }
                ?>
                
                <td>  
                 
                 
                 
                  <?=$jro['districtname']?> </td>
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
	
	
	
    <tr> <td> <h3> <?=$name?> </h3></td><td><? echo $tyes; ?> </td> <td> <?   echo $tnon; ?> </td> <td> <? echo $tpublic; ?> </td><td> <?   echo $tprivate; ?> </td><td> <? echo $tprofit; ?> </td> <td> <? echo $thouse; ?> </td>
				    <td> <? echo $ttotal; ?> </td></tr>
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
  
 <a href="../report_work.php">  Back </a>                   
 
  <input id="printpagebutton" type="button" value="Print this list" onClick="printpage()"/>  </td>                   
                             
                 <td>
             <form action="findRepSectorWork.php" method="post" id="form1">
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

