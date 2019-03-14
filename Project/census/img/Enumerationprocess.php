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

<p> NATIONAL STATIC OF RWANDA </p> </br>

</div>
<div id="Content">
<div id="navmenu">
<ul>
<li><a href="enum.php">HOME</a>
<li><a href="dayreport.php">VIEW YOUR REPORT </a>
<li> <a href="logout.php"> LOGOUT </a></li>
</ul>

</div>
          <form action="fstquestionform.php" method="post" name="form1">
          <fieldset>
         
                <h1 align="center"> HOUSEHOLD CHARACTERISTIC </h1>
               
                <table width="60%" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                      
                               <td  width="150">
                               <label for="province"> 0.1 Select The Province </label> <br>
                                    <select name="province" required onChange="getDistrict(this.value)" >
                                     <option value="" style="display:none"> -- Select Province-- </option>
                                    <option value="1"> KIGALI </option>
                                     <option value="5"> SOUTH</option>
                                      <option value="2"> NORTH</option>
                                      <option value="4"> EAST</option>
                                       <option value="3"> WEST</option>
                                    </select></td>
                                    </tr>
                                   <tr style="">
                                      <td><div id="districtdiv">
                                      <label for="district"> 0.2 Select The District </label><br>
                                        <select name="district" required>
                                        <option >-- Select District First--</option>
                                         </select> </div></td>
                                    </tr>
                                   <tr style=""><td>
                                                 <divi id="sectordiv">
                                                 <label for="sector">0.3 Select The Sector </label><br>
                                            <select name="sector" required>
                                             <option>-- Select Sector First--</option>
                                           
                                          </select>  </div> </td>
                
                </tr>
                                   <tr style=""> <td><div id="celldiv">
                                   <label for="cell">0.4 Select The Cell </label><br>
                <select name="cell" required>
                 <option>-- Select cell First--</option>
                
                </select> </div> </td>
                                </tr>
                                   <tr style=""> <td>
                <div id="villagediv">
                <label for="village">0.5  Select The Village </label><br>
                <select name="village" required>
                 <option>-- Select village First--</option>
               
                </select></div></td>
                </tr>
                </table>
                 <div>
                    <input type="hidden" name="year" value="<?=$_SESSION['Year_Of_census']?>"/>
                    </div>
                <div>
                <label> A1. Enter the Id Number of this house </label>
                    <input type="text" placeholder="Id Number of house" name="Idnumber"/>
                    </div>
                <div>
                <label>  A2. How many people were living or staying in this house,apartment, or mobile home on  </label>
                    <input type="text" placeholder="Number of people" name="number" pattern="[0-9]{1,2}"required/>
                    </div>
                   <div>
                  <label> A3. TYPE OF HABITAT </label>                  <select name="habitant" required> 
                              <option value="#"> Select Habitant </option>
                              <option value="umudugudu"> Umudugudu </option> <option value="Old settlement">Old settlement </option> <option value="Dispersed/Isolated housing">Dispersed/Isolated housing</option> <option value="Planned urban">Planned urban housing </option>  <option value="Spontaneous">Spontaneous/Squatter housing </option>
                              </select>       </div>
                              <div>                                 <label> A4. TYPE OF BUILDING </label>                  <select name="building" required> 
                              <option value="default"> Select Building </option>
                              <option value="House occupied"> House occupied by one household </option> <option value="occupid by several households">House occupied by several households </option> <option value="Storey building">Storey building occupied by one or more households</option> <option value="several building">Several buildings in a compound occupied by several households </option>  <option value="Spontaneous">Spontaneous/Squatter housing </option>
                              </select>       </div>                            
                   <div>                                 <label> A5. TENURE OFT THE HOUSING UNIT</label>                  <select name="tenure" required> 
                   <option value="default"> Select tenure  </option>
                              <option value="Owner">Owner </option> <option value="Tenant">Tenant </option> <option value="Hire purchase">Hire purchase </option> <option value="Free lodging">Free lodging </option>  <option value="Staff housing">Staff housing </option>  <option value="Refuge">Refuge/Temporary </option> <option value="Camp settlement">Camp settlement </option>
                              </select>       </div>
                    <div>                                 <label> A6.  MAIN MATERIAL OF THE ROOF </label>
                    <label> What is the main material used for the roof ?</label>                  <select name="roof" required>
                    <option value="default"> Select Material Roof </option> 
                              <option value="Iron"> Iron Sheets </option> <option value="Local tiles">Local tiles </option> <option value="Industrial Tiles">Industrial Tiles </option> <option value="Asbestos">Asbestos </option>  <option value="Concrete"> Concrete </option>  <option value="Cartoons"> Cartoons/Sheathing </option> <option value="Grass">Grass </option>
                              </select>       </div>
 
     <div>                                 <label> A7.  MAIN MATERIAL OF THE WALLS</label>
                    <label> What is the main material used for the walls ?</label>                  <select name="walls" required> 
                              <option value="Wood/Mud"> Wood/Mud </option> <option value="Wood/Cemented mud"> Wood/Cemented mud </option> <option value="Sundried bricks">Sundried bricks </option> <option value="Plastic">Plastic Sheathing/Cardboard </option>  <option value="Cement blocks">Cement blocks/Concrete. </option>  <option value="Stone"> Stone </option> <option value="Timber">Timber </option> <option value="Burnt bricks"> Burnt bricks </option>
                              </select>       </div>
                              
                     <div>                                 <label> A8.  MAIN MATERIAL OF THE FLOOR </label><br>
                    <label> What is the main material used for the floor ?</label>                  <select name="floor" required> 
                              <option value="Earth/Sand">Earth/Sand </option> <option value="Concrete">Concrete </option> <option value="Stone">Stone </option> <option value="Burn bricks">Burn bricks </option>  <option value="Timber">Timber </option> </select>       </div>                                          
                         <div>                               
                           <label> A9. NUMBER OF ROOMS</label> <br>
                           <label> How many rooms do the housing units have, including bathrooms,toilets,ktchen,store rooms ? </label>  <br>               
                                      <input type="text" name="ROOMS" placeholder="Room Number" max="3" min="0" value="0" > </div>      
                                     <div>                                 
               <label> A10. NUMBER OF BED ROOMS</label> <br>
                    <label> How many of these rooms ar used for sleeping ?</label>                  <input type="text" name="Bed" placeholder="Room Number" pattern="[0-9]{1,2}"required> </div>                   
                  <div>                                 <label>A11. NUMBER OF OCCUPANTS</label> <br>
                    <label> How many of these rooms ar used for sleep in the housing unit </label>                  <input type="text" name="Occupant" placeholder="Room Number"pattern="[0-9]{1,2}"requireds > </div>     
                     <div>                                 <label>A12. MAIN SOURCE OF WATER </label> <br>
                    <label> What is the main source of water supply for members of the household </label>
 <select name="water" required> 
                              <option value="Internal pipe-born water"> Internal pipe-born water </option> <option value="Pip-born water in the compound">Pip-born water in the compound </option> <option value="Public tap out of the compound">Public tap out of the compound </option> <option value="Protected Spring/Well">Protected Spring/Well </option>  <option value="Unprotected Spring/Well">Unprotected Spring/Well </option> <option value="Rain Water">  Rain Water </option> <option value="River">River </option> <option value="Lake/Stream">Lake/Stream/Pond/Surface water </option></select>                   
                    
                     </div> 
                      <div>                                 <label>A13. TYPE OD TOILET FACILITY </label> <br>
                    <label> What is the main type of toilet facility used by the members of the household?</label>
 <select name="Facility" required> 
                              <option value="Flush toilet"> Flush toilet/water closet(WC)system </option> <option value="Private pit latrine"> Private pit latrine </option> <option value="Public pit latrine"> Public pit latrine </option> <option value="Bush"> Bush </option> </select>                   
                    
                     </div> 
                      <div>                                 <label>A14. MAIN SOURCE OF ENERGY FOR LIGHTING </label> <br>
                    <label> What is the main source of  energy the household uses for lighting?</label>
 <select name="lighting" required> 
                              <option value="Electricity by EWSA">Electricity by EWSA </option> <option value="Hydro-electric or other private source"> Hydro-electric or other private source </option> <option value="Solar power">solar power  </option> <option value="generator">generator  </option>  <option value="kerosene lamp"> kerosene lamp </option> <option value="paraffin"> paraffin </option> <option value="candle"> candle </option> </select>                   
                    
                     </div> 
                     
                      <div>                                 <label>A15. MAIN SOURCE OF ENERGY FOR COOKING</label> <br>
                    <label> What is the main source energy of the household  uses for cooking?</label>
 <select name="cooking" required> 
 
                              <option value="Electricity"> Electricity </option> <option value="biogas"> biogas </option> <option value="gas"> gas </option> <option value="kerosen">kerosene </option>  <option value="firewood"> firewood </option> <option value="charcoal"> charcoal </option> <option value="gras/leaves">grass/leaves </option> </select>                   
                    
                     </div> 
              <br>
                <input type="submit" name="submit" value="Next"/>
                </div>
            </fieldset>    
          </form>
</div>
</div>
<div id="footest">
<p id="n"> COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved </p>
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