<? session_start();

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
<h1 align="center"> REPORT OF WHOLE POPULATION </h1>
                <?php
				require_once('db_connect.php');
				?>
                
                <table>
                <tr>
               
                <th>  ID NUMBERS </th> <th> NAME  </th> <th> LAST NAME  </th> <th> PHONE  </th> <th> PERCENTAGE ENUMERATE  </th><th> TOTAL OF PERSON </th>
                </tr>
              
                <tr>
                <?
				
				$tperson=0;
				$tperc=0;
				
				$qy="SELECT * FROM enumerators";
                $re=mysql_query($qy);
	             while($ro=mysql_fetch_array($re)){
				$idenum=$ro['Id_Enum'];
				$count=0;
				$total=0;
				 // This is for selecting the Total number of Household
                
                $query="SELECT *from household";
                $res=mysql_query($query) or ('Error in selection');
                while($row=mysql_fetch_array($res)){
				$count=$count+1;
				if($row['Id_Enum']==$idenum) {
				$count=$count+1;
				 $c=$row['Nu.Members'];
				 $total=$total+$c;
				  }
				  }
				  
				  $tperc=($total*100)/$count;
                ?>
                
                <td>  
                 
                 
                 
                  <?=$ro['Id_Enum']?> </td>
				 <td>  
                 
                 
                 
                  <?=$ro['Name_Enum']?> </td>
				 
                 <td><?=$ro['LN_Enum']?> </td>
				 
                 <td><?=$ro['Phone']?> </td>
				  
                  <td><?=$tperc?></td>
                  
                  <td><?=$total?></td>
                 </tr>
                
	<?
	}
	
	
	
	?>
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


