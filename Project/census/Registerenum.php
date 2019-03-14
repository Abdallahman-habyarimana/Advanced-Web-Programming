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
<div id="main">
 <form action="enumeratorregisterprocess.php" method="post">
               <h2 align="center"> FORM OF ADDING NEW ENUMERATOR </h2>
              <table width="60%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              <td> 
               <div>
                    <select name="province" onChange="getDistrict(this.value)">
	                 <option value=""> -- Select Country -- </option>
	                  <option value="1">KIGALI</option>
                      <option value="2">NORTH</option>
	                     <option value="3">WEST</option>
                          <option value="4">EAST</option>
                          <option value="5">SOUTH</option>
        </select>
                    </div></td></tr>
                    <tr>
              <td>
                    <div id="districtdiv">
                                     
                                        <select name="district" >
                                        <option>-- Select District First--</option>
                                         </select> </div></td></tr>
                                   <tr>
              <td>
                                                 <divi id="sectordiv">
                                                
                                            <select name="sector" >
                                             <option>-- Select Sector First--</option>
                                           
                                          </select>  </div> </td></tr>
                                       
                </table>
                 <div>
                     <select name="census_year">
	                 <option value=""> -- Select Census Year -- </option><?
require_once('db_connect.php');
$qy="SELECT * FROM census_tb";
       $re=mysql_query($qy);
	    while($row=mysql_fetch_array($re)){?>
	             <option value=<?=$row['Year_Census']?>> <?=$row['Year_Census']?> </option>
                 <? } ?>
</select>

                    </div>
                <div>
                    <input type="text" name="idnumber" placeholder="Id Number" pattern="[1]{1}[1]{1}[9]{1}[0-9]{2}[7-8]{1}[0]{3}[0-9]{4}[0-9]{1}[0-9]{2}" required />
                    </div>
                    <div>
                    <input type="text" name="fname" placeholder="First Name" pattern="[A-Z]{1}[A-Za-z]{1,}" required/>
                </div>
                <div>
                    <input type="text" name="lname" placeholder="Last Name" pattern="[A-Z]{1}[A-Za-z]{1,}" required/>
                </div>
                
                 <div>
                    <input type="text" name="phone" placeholder="Phone Number" pattern="[0]{1}[7]{1}[2,3,8]{1}[0-9]{7}" required/>
                </div>   
                <div>
                    <input type="text" name="user_name" placeholder="Enter the Username"required pattern="[A-Z]{1}[a-z]{4,6}[0-9]{1,2}" />
                </div>
                <div>
                    <input type="password" name="pass_word" placeholder="Type the password"required pattern="{6,8}"/>
                </div>
                <div>
                <input type="submit" name="submit" value="Add"/>
                </div>  
          </form>

</div>
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