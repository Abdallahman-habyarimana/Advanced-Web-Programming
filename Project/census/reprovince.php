<!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="sheet.css" media="all" />
<link type="text/css" rel="stylesheet" href="Enumerationprocess.css" media="all" />
<title> Census </title>
</head>

<body>
<div id="Content">
<header class="heading">

<p> NATIONAL STATIC OF RWANDA </p> </br>

</header>
<nav id="navmenu">
<ul>
<li> <a href="index.php">HOME</a></li>
<li> <a href="report.php">REPORT</a></li>
</ul>

</nav>

<section>

          
          <fieldset>
         
                <h1 align="center"> LIST OF OF POPULATION</h1>
                <?php
				session_start();
				require_once('db_connect.php');
				if(isset($_POST['submit'])) {
				$prv=$_POST['province'];
				 $count=0;
                $male=0;
                $female=0;
				$ten=0;
				$s=0;
				$n=0;
                 $query="SELECT *from province where Id_Province='$prv'";
                $result=mysql_query($query) or ('Error in selection');
				 while($row=mysql_fetch_array($result)){
				  $qry="SELECT *from district where Id_Province='$prv'";
                $res=mysql_query($qry) or ('Error in selection');
				  while($dist=mysql_fetch_array($res)){
				 $a=$dist['Id_district'];
				 $qury="SELECT *from sector where Id_district='$a'";
                $resu=mysql_query($qury) or ('Error in selection');
				  while($sect=mysql_fetch_array($resu)){
				 $b=$sect['Id_sector'];
				 $qrey="SELECT *from cell where Id_sector='$b'";
                $rsu=mysql_query($qrey) or ('Error in selection');
				 while($cel=mysql_fetch_array($rsu)){
				 $c=$cel['Cell_Id'];
				 $qrye="SELECT *from village where Cell_Id='$c'";
                $rsut=mysql_query($qrye) or ('Error in selection');
				 while($vil=mysql_fetch_array($rsut)){
				 echo $vil['Village'];
				  echo '<br>';
				  }
				  }
				  echo '<br>';
				  }
				 echo '<br>'; 
	}
	echo '<br>';
	}
	echo '<br>';
	}
     /*           $count=$count+1;
				$d=$row['Dob'];
				$e=date('Y,m,d');
				$f=$e-$d;
				
				if($f>18){
				$s=$s+1;
				}
				else
				{
				$n=$n+1;
				}
                if($row['Sex']=='Male')
                {
                $male=$male+1;
                }
                if($row['Sex']=='Female')
                {
                $female=$female+1;
                }
                }
                // This is for selecting the Total number of Household
                
                $query="SELECT *from household";
                $res=mysql_query($query) or ('Error in selection');
                $house=0;
                while($row=mysql_fetch_array($res)){
				if($row['Tenure']=='Owner')
                {
                $ten=$ten+1;
                }
                $house=$house+1;
                }
				
                $pmale=($male*100)/$count;
                $pfemale=($female*100)/$count;
				$tten=($ten*100)/$house;
				 $ss=($s*100)/$count;
				$nn=($n*100)/$count;*/
                ?>
             
            </fieldset>    
        

</section>
<footer>
<div id="footest">

</div>
</footer>
</div>
</body>
</html>
<script type="text/javascript">
function showHiddenmenu(layer){
var myLayer = document.getElementById(layer);
if(myLayer.style.display=="none" || myLayer.style.display==""){
myLayer.style.display="block";
} else {
myLayer.style.display="none";
}
}
</script>


