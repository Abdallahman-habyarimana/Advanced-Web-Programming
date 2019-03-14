<?
session_start();

if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){
$id=$_SESSION['Id_Enum'];
 require_once('db_connect.php');
if(isset($_POST['submit']))
{
$province=$_POST['province'];
$district=$_POST['district'];
$cell=$_POST['cell'];
$sector=$_POST['sector'];
$village=$_POST['village'];
$year=$_POST['year'];
$number=$_POST['number'];
$Idnumber=$_POST['Idnumber'];
$habitant=$_POST['habitant'];
$cooking=$_POST['cooking'];
$lighting=$_POST['lighting'];
$building=$_POST['building'];
$tenure=$_POST['tenure'];
$roof=$_POST['roof'];
$walls=$_POST['walls'];
$floor=$_POST['floor'];
$water=$_POST['water'];
$facility=$_POST['Facility'];
$Bed=$_POST['Bed'];
$rooms=$_POST['ROOMS'];
$Occupant=$_POST['Occupant'];
$dat=date('Y,m,d');
if($_SESSION['province']!= $province && $_SESSION['district']!=$district && $_SESSION['sector']!=$sector){
?>
<script type="text/javascript">
    alert(' You can not Enumerate This Province/District/Sector while your are not register in');
    </script>
    <meta http-equiv="refresh" content="0; URL=Enumerationprocess.php" />

<?
}
else
{
$query="SELECT *From household where House_Id='$Idnumber'";
$result=mysql_query($query) or ('Error in selection');
if(mysql_num_rows($result)>0){
?>
<script type="text/javascript">
    alert(' This house have already enumerate ');
    </script>
    <meta http-equiv="refresh" content="0; URL=http://www.abdal.ibishya.biz/census/Enumerationprocess.php" />

<?
}
else
{
$qry ="INSERT into household VALUES('$Idnumber','$id','$number','$habitant','$building','$tenure','$roof','$walls','$floor','$rooms','$Bed','$Occupant','$water','$facility',
'$lighting','$cooking','$dat','$year','$village','$cell','$sector','$district','$province')";
$res=mysql_query($qry) or ('Error to Insert');
if($res)
{

}
}
  ?>
 <!DOCTYPE html">
<html lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
<link type="text/css" rel="stylesheet" href="css/sheet.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/Enumerationprocess.css" media="all" />
<script src="jquery.min.js" type="text/javascript"></script> 
<script type="text/javascript">
function jQnsHide(itemName,entityName,val_){
  $(document).ready(function(){
		$("#" + entityName).change(function(){

			if ($(this).val() == val_ ) {
              
			   $("#" + itemName).slideDown("fast"); //Slide Down Effect

			} else {

				 $("#" + itemName).slideUp("fast");	//Slide Up Effect

			}
		}); 
		});  
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
<li> <a href="#">HOME</a><li>
<li><a href="#">LIST PEOPLE ENUMERATE </a>
<li>
<li> <a href="#">LOGIN</a>
</li>
<li> <a href=""> LOGOUT </a></li>
</ul>

</div>
  <form action="scdquestionform.php" method="post">
          <fieldset>
          <legend> STARTING ENUMERATION </legend>
          <h1 align="center"> B. CHARACTERISTIC OF POPULATION </h1>
          <?  for($i=1; $i<=$number;$i++)
  {
?>
                   <div>
                   <input type="hidden" name="Idnumber[<? echo $i; ?>]" value="<? echo $Idnumber; ?> "/>
                   <input type="hidden" name="number" value="<?=number?>" id="number"/>
                   <label><h3> PERSON <? echo $i; ?> </h3></label> <br>
                  <label> <p> First Name </p> </label>                                                                    
                   <input type="text" name="fname[<? echo $i; ?>]" placeholder=" First Name "/>
                  </div>
                 <div>
                  <label> <p> Last Name </p> </label>
                   <input type="text" name="lname[<? echo $i; ?>]" placeholder=" Last_Name "/>
                  </div>
                   <div>
                  <label> <p> B2. Relationship to the Head of Household  </p> </label>
                 
                <select name="relation[<? echo $i; ?>]" id="relation<? echo($i); ?>" > 
                              <option value="Head of household">Head of household</option> 
                              <option value="spouse">Spouse</option> 
                              <option value="Brother/Sister">Brother/Sister</option>
                              <option value="Unrelated Child">Unrelated Child</option>
                              <option value="Grand Child">Grand Child</option> 
                              <option value="Other relative">Other Relative</option> 
                              <option value="Son/Daughter">Son/Daughterr</option>
                              <option value="Non Relative">Non Relative</option>
                              </select>
                  </div> 
                  <div>
                <label>B3. Sex</label> <br>
                 <input type="radio" name="sex[<? echo $i; ?>]" value="Male"> Male <br>
                <input type="radio" name="sex[<? echo $i; ?>]" value="Female"> Female<br>
                 </div>
              <div>
                <label>B4. Date of Birth </label> <br>
                 <input type="text" name="dob[<? echo $i;?>]" placeholder="Date of birth"/>
                               </div>
                               
                <div>
                <label> <b> B5. Residence status </b> </label><br>   
                <input type="radio" name="statues[<? echo $i; ?>]" value="Present"> Present
                <input type="radio" name="statues[<? echo $i; ?>]" value="Absent"> Absent
                <input type="radio" name="statues[<? echo $i; ?>]" value="Visitor"> Visitor       
                 </div>
         
                             <div>
                <label> B7. What is Your nationality </label> <br>
                 <input type="text" name="nationality[<? echo $i; ?>]" placeholder="Put your nationality here "/>
                               </div>
                                 <div>
                <label> B8. How long has you been living continuously in this District? </label> <br>
                 <input type="text" name="living[<? echo $i; ?>]" placeholder="Record 0 if less than 1 year, and record 1 if residence has
not changed since birth " pattern="[0-1]{1,}" required/>
                               </div>
                               <div>
                               <label> B9. What is your religion </label> <br>
                              <select name="religion[<? echo $i; ?>]"> 
                              <option value="#">None</option>
                              <option value="Catholic">Catholic</option> 
                              <option value="Muslim">Muslim</option> 
                              <option value="No Religion">No Religion</option>
                                <option value="Protestant">Protestant</option>
                                <option value="Jehovah Witness">Jehovah Witness</option>
                                <option value="Adventist">Adventist</option>
                                <option value="Tradi/Animist">Tradit/Animist</option>
                              </select>
                               </div>
                                <div>
                <label> B10. Does have any difficulty or problem as listed below? </label> <br>
                <select name="problem[<? echo $i; ?>]"> <option value="#"> -- Select Your Problem -- </option><option value="None"> None </option>
                              <option value="Seeing">Seeing</option> <option value="Hearing">Hearing</option> <option value="Speaking">Speaking</option>
<option value="Walking/Climbing">Walking/Climbing</option><option value="Learning/Concentrating">Learning/Concentrating</option>
                              </select>
                
                               </div>
                                <div>
                <label> B11. What is Medical Insurance</label> <br>
                <select name="health[<? echo $i; ?>]"> 
                              <option value="#">None</option>
                              <option value="Mutuelle">Mutuelle</option>
                               <option value="RAMA">RAMA</option> 
                               <option value="MMI">MMI</option>
                                <option value="FARG">FARG</option>
                                <option value="Insurance Cie">Insurance Cie</option>
                                <option value="School">School</option>
                                <option value="Employer">Employer</option>
                              </select>
                
                               </div>
                               <div>
                <label> B12. Can you read and write with understanding in the following languages ?</label><br>
              <input type="checkbox" name="language[<? echo $i; ?>]" value="kinyarwanda"> Kinyarwanda <br>
               <input type="checkbox" name="language[<? echo $i; ?>]" value="English"> English <br>
                <input type="checkbox" name="language[<? echo $i; ?>]" value="French"> French <br>
                 <input type="checkbox" name="language[<? echo $i; ?>]" value="all language"> All language <br>
                
                               </div>
                                <div>
                <label> B13. Has you ever attended school ?</label><br> 
                <select name="school[<? echo $i; ?>]" id="school<? echo $i; ?>"> 
                              <option value="Has never attended">Has never attended </option> <option value="Has ever attended">Has ever attended</option> <option value="Is currently attending"> Is currently attending school</option>
                              </select>
                
                               </div>
                              <div id="hide_s<? echo($i); ?>" class="hide"> 
                          <label> B14.What is the highest level of education attended? </label><br>
                           <select name="education[<? echo($i); ?>]" id="education"> 
                              <option value="Preschool"> Preschool </option> <option value="Primary">Primary </option> <option value="Secondary">Secondary</option> <option value="University"> University </option>
                              </select>
                          </div>
                          <div class="hide" id="hide2"> 
                          <label>B15.What is the highest certificate/degree obtained? </label><br>
                           <select name="certificate[<? echo($i); ?>]" id="certificate" >
                              <option value="None"> None </option> <option value="A2">A2 </option> <option value="A1">A1</option> <option value="A0"> A0 </option>  <option value="Master"> Master </option>  <option value="Doctorate"> Doctorate </option>
                              </select>
                          </div>
                          
                          <div> 
                          <label>B16. Did you work ?  </label><br>
                           <select name="work[<? echo $i; ?>]"  id="work<? echo($i); ?>"> 
                              <option value="Non"> Non </option> <option value="Yes"> Yes </option> 
                              </select>
                          </div>
                           <div id="hide_w<? echo($i);?>" class="hide"> 
                          <label>B17. What is status of work </label><br>
                           <select name="statwork[<? echo $i; ?>]" id="statwork"> 
                              <option value="Employee"> Employee </option> <option value="Employer">Employer </option> <option value="Self-mployed"> Self-employed </option> <option value="Contributing"> Contributing family worker </option> <option value="Producer's cooperative member">Producer's cooperative member </option>  
                              </select>
                          </div>
                          <div class="hide" id="hide4"> 
                          <label> B18. Did do one of the following activities?  </label><br>
                           <select name="activity[<? echo $i; ?>]" id="activity"> 
                              <option value="Farming"> Farming/Rearing animals/Fishing </option> <option value="Production"> Production</option>  <option value="Service"> Services/Selling </option>  <option value="House worker"> House worker at someone's house </option>  <option value="Home worker"> Home worker at own house </option>  <option value="None"> None </option>
                              </select>
                          </div>
                           <div class="hide" id="hide5"> 
                          <label> B19. What is the institution sector?  </label><br>
                           <select name="sector[<? echo $i; ?>]" id="sector"> 
                              <option value="Public"> Public </option> <option value="Private"> Private</option>  <option value="Non-Profit"> Non-Profit institution </option>  <option value="Household"> Household </option>
                              </select>
                          </div>
                           <? if($i==1 || $i==2) {?>
                           <div class="hide_m<? echo($i); ?>" id="hide6"> 
                          <label>B20. What is the marital status?  </label><br>
                           <select name="marital[<? echo($i); ?>]" id="marital<? echo($i); ?>"> 
                              <option value="Never married"> 1. Never married </option> <option value="married"> 2. Married </option>  <option value="Separated"> 3. Separated </option>  <option value="Widowed"> 4. Widowed </option> <option value="divorced"> 5. Divorced </option>
                              </select>
                          </div>
                         
                           <div id="hide_H<? echo($i);?>" class="hide">
                <label> B21. How many spause/Husband have ? </label> <br>
                 <input type="text" name="spause[<? echo $i; ?>]" placeholder="Current number of spouses :" id="spause"/>
                 </div>
                 <div  id="hide_B<? echo($i);?>" class="hide">
                <label> B22. How many live births[NAME] has ever had? </label> <br>
                 <input type="text "name="Live[<? echo $i; ?>]" placeholder="Number of births" id="live"  />
                               </div>
                               <div  id="hide_w<? echo($i);?>" class="hide">
                <label> B23. Among those children, how many are still a live ? </label> <br>
                 <input type="text" name="children[<? echo $i; ?>]" placeholder="Still alive:" id="children" />
                 </div>
                  <div  id="hide_M<? echo($i);?>" class="hide">
                <label> B24. How many Male are still a live ? </label> <br>
                 <input type="text" name="Lmale[<? echo $i; ?>]" placeholder="Male Still alive:" id="Lmale" />
                 </div>
                  <div  id="hide_<? echo($i);?>" class="hide">
                <label> B25. How many Female are still a live ? </label> <br>
                 <input type="text" name="Lfemale[<? echo $i; ?>]" placeholder="Female Still alive:" id="Lfemale"  />
                 </div> 
                               <hr width="70%"> 
                  <?
				  }
				   echo '<script type="text/javascript">
  				jQnsHide("hide_s'.($i).'","school'.$i.'","Has ever attended");
				jQnsHide("hide_m'.($i).'","relation'.$i.'","Head of household");
  				jQnsHide("hide_w'.($i).'","work'.$i.'","Yes");
				jQnsHide("hide_H'.($i).'","marital'.$i.'","married");
				jQnsHide("hide_H'.($i).'","marital'.$i.'","Separated");
  				jQnsHide("hide_H'.($i).'","marital'.$i.'","Widowed");
				jQnsHide("hide_H'.($i).'","marital'.$i.'","divorced");
				
  				</script>';
				  
		  }
		  ?> 
                <div>
                <input type="submit" name="submit" value="CONFIRM"/>
                </div>
                <div>
              <a href="enumerationprocess.php"> BACK </a>
                </div>
                <?
				}
		  ?>             
            </fieldset>   

          </form>
</div>
<div id="footest">
<p> COPY RIGHT HABYARIMANA Abdallahman & NSANZIMFURA VALENS - All Rights Reserved </p>
</div>

</body>
</html>
<?
}
}
?>