<? 
session_start();
				if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){

?>
<!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="css/sheet1.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/enumstlying.css" media="all" />
<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getDistrict(provinceId) {		
		
		var strURL="residence/findDistrict.php?province="+provinceId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('districtdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
	function getSector(provinceId,districtId) {	
		var strURL="residence/findSector.php?province="+provinceId+"&district="+districtId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('sectordiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	
	
	function getCell(provinceId,districtId,sectorId) {		
		var strURL="residence/findCell.php?province="+provinceId+"&district="+districtId+"&sector="+sectorId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('celldiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	
	function getVillage(provinceId,districtId,sectorId,cellId) {		
		var strURL="residence/findVillage.php?province="+provinceId+"&district="+districtId+"&sector="+sectorId+"&cell="+cellId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('villagediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	
</script>
<title> Census </title>
</head>

<body>
<div id="heading">
</div>
<div id="Content">
<div id="navmenu">
<ul>
<li> <a href="admin.php">HOME</a><li>
<li> <a href="logout.php"> LOGOUT </a></li>
</ul>
</div>
<div id="Container">
<div  id="Sectioncontent">
<ul>
   <li class='active '><a href='add_census.php'><span>ADD CENSUS YEAR</span></a></li>
   <li><a href='Registerenum.php'><span>ADD ENUMERATOR</span></a></li>
   <li> <a href="report.php"><span> POPULATION REPORT </span></a></li>
<li> <a href="report_household.php"><span> HOUSEHOLD REPORT </span></a></li>
<li> <a href="list_enumerators.php"><span> LIST OF ENUMERATORS</span></a></li>
 <li><a href='report_health.php'><span>HEALTH</span></a></li>
  <li><a href='report_religion.php'><span>RELIGION REPORT</span></a></li>
   <li><a href='report_probleme.php'><span>SOCIAL PROBLEM</span></a></li>
    <li><a href='report_work.php'><span>REPORT ABOUT WORK</span></a></li>
     <li><a href='report_study.php'><span>REPORT ABOUT STUDY</span></a></li>
</ul>
</div>

<div id="heawelcome">
<p> WELCOME TO NISR </p>
</div>
<div id="main1">
 <br><br>
<p align="center" id="z"> <h5 align="center"> Welcome <?=$_SESSION['name1']?> <?=$_SESSION['last1']?> As Administrator to the </h5><h3 align="center"> COMPUTERIZED NATIONAL CENSUS SYSTEM</h3> </p>
</div>
</div>
</div>
<div id="footest">
<p> COPY RIGHT HABYARIMANA SPECIAL TEAM - All Rights Reserved </p>
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