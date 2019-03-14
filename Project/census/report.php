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
                 
                             <img src="../img/logo.jpg" align="center"><br>
                         

                      </div>

<div id="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</div>
<div id="content">
<div id="navmenu">
<ul>
<li> <a href="admin.php">HOME</a><li>
<li><a href="admin.php?addenum=addenum">ADD ENUMERATOR </a></li>
<li> <a href="report.php">VIEW REPORT</a></li>
<li> <a href="list_enumerators.php"> LIST OF ENUMERATORS </a></li>
<li> <a href="logout.php"> LOGOUT </a></li>
</ul>

</div>
<div id="Container">
<div id="table_design">    
                <h1 align="center"> REPORT OF WHOLE POPULATION </h1>
                <?php
				session_start();
				require_once('db_connect.php');
				?>
                
                <table>
                <tr>
               
                <th>  NAME OF PROVINCE </th> <th> TOTAL OF MALE  </th>  <th>PERCENTAGE OF MALE</th><th> TOTAL OF FEMALE  </th><th>PERCENTAGE OF FEMALE</th> <th> SINGLE  </th><th>PERCENTAGE SINGLE</th> <th> MARRIED  </th><th>PERCENTAGE OF MARRIED</th><th> TOTAL OF PERSON </th>
                </tr>
              
                <tr>
                <?
				$tmale=0;
				$tfemale=0;
				$tperson=0;
				$tsingle=0;
				$tmarried=0;
				$tpmale=0;
				$tpfemale=0;
				$qy="SELECT * FROM province";
                $re=mysql_query($qy);
	             while($ro=mysql_fetch_array($re)){
				 $idprovince=$ro['Id'];
				 $count=0;
                $male=0;
                $female=0;
				  $single=0;
                $married=0;
				$fmf=0;
				$pmale=0;
				$pfemale=0;
				
				 // This is for selecting the Total number of Household
                
                $query="SELECT *from household where Id_province='$idprovince'";
                $res=mysql_query($query) or ('Error in selection');
                $house=0;
                while($row=mysql_fetch_array($res)){
				 $idhouse=$row['House_Id'];
                 $qy="SELECT *from population where House_Id='$idhouse'";
                $rs=mysql_query($qy) or ('Error in selection');
				 while($pp=mysql_fetch_array($rs)){
				 if($pp['Marital_statue']=='Single')
				 {
				  $single=$single+1;
				 }
				 else
				 {
				      
					  $married=$married+1;
				 }
			      if($pp['Sex']=='Male')
				  {
				  $male=$male+1;
				    $fmf=$fmf+1;
				  }
				  else
				  {
				  $female=$female+1;
				     $fmf=$fmf+1;
				  }
				
				  }
				 if($fmf!=0)
				  {
				  $pmale=($male*100)/$fmf;
				  $pfemale=($female*100)/$fmf;
				  $tsingle=($single*100)/$fmf;
				  $tmarried=($married*100)/$fmf;
				  }
				  else
				  {
				  $pmale=0;
				  $pfemale=0;
				  }
				  }
				  
                ?>
                
                <td>  
                 
                 
                 
                  <?=$ro['Name']?> </td>
				 <td> <? echo $male; ?> </td>
				 <td> <? echo $pmale; ?> </td>
                 <td> <?   echo $female; ?> </td>
				 <td> <? echo $pfemale; ?> </td>
                 <td> <? echo $fmf; ?> </td>
				  <td> <?   echo $single; ?> </td>
                  <td> <?   echo $tsingle; ?> </td>
                 <td> <? echo $married; ?> </td>
				  <td> <? echo $tmarried; ?> </td>
                 </tr>
	<? 
	
	$tmale=$tmale+$male;
	$tfemale=$tfemale+$female;
	$tsingle=$tsingle+$single;
	$ttmarried=$tmarried+$married;
	$tperson=$tperson+$fmf;
	
	}
	
	
	
	?>
    <tr> <td> <h3> RWANDA </h3></td><td> <? echo $tmale; ?> </td> <td> <? echo $tfemale; ?></td> <td> <? echo $tsingle; ?> </td> <td> <? echo $tmarried; ?></td><td> <? echo $tperson; ?></td></tr>
				 </table>
                 <div>
                <form action="residence/findRepDistrict.php" method="post" name="form1" id="form1">
                
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
</div>
</div>
<script type="text/javascript">                 
    function printpage() {
//Get the print button and put it into a variable
var printButton = document.getElementById("printpagebutton");
var divtitle=document.getElementById("divtitle");
var navmenu =document.getElementById("navmenu");
var heading =document.getElementById("heading");
var form1=document.getElementById("form1");
var footest=document.getElementById("footest");
//Set the print button visibility to 'hidden'
printButton.style.visibility = 'hidden';
navmenu.style.visibility ='hidden';
heading.style.visibility ='hidden';
form1.style.visibility='hidden';
footest.style.visibility='hidden';
divtitle.style.visibility ='visible';
//Print the page content
window.print()
//Set the print button to 'visible' again
//[Delete this line if you want it to stay hidden after printing]
divtitle.style.visibility='hidden';
printButton.style.visibility = 'visible';
navmenu.style.visibility ='visible';
heading.style.visibility ='visible';
footest.style.visibility='visible';
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


