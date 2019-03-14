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
<li> <a href="index.php">HOME</a><li>
<li><a href="list.php">LIST PEOPLE ENUMERATE </a>
<li>
<li> <a href="#" onClick="javascript:showHiddenmenu('hid') ">LOGIN</a>

<ul class="submenu" id="hid">
                <li><a href="enumerator_login.php"> ADMINISTRATOR </a></li>
            </ul>
</li>
<li> <a href=""> LOGOUT </a></li>
</ul>

</nav>

<section>

          
          <fieldset>
         
                <h1 align="center"> LIST OF OF POPULATION</h1>
                <?php
				session_start();
				require_once('db_connect.php');
				?>
                <table border="1" width="70%" height="auto">
                <tr>
                <td>  ID OF POPULATION</td> <td> FIRST NAME  </td> <td> LAST NAME </td><td> SEX </td><td> RELATIONSHIP </td><td> RESIDENCE STATUE </td><td> MARITAL STATUE</td><td> DATE OF BIRTH </td><td> NATIONALITY </td><td>RELIGION </td><td> PROBLEM </td><td> INSURANCE </td><td> LANGUAGE </td><td> ATTEND SCHOOL </td><td> LEVEL OF EDUCATION </td><td> DEGREE </td><td> WORK </td><td> STATUS OF WORK </td><td> ACTIVITY </td><td> INSTITUTION</td><td> SPOUSE </td><td> NUMBER OF CHILDREN </td><td> NUMBER OF LIVE CHILDREN </td><td> NUMBER OF MALE CHILDREN </td><td> NUMBER OF FEMAL CHILDREN </td><td> HOUSE ID </td>
                </tr>
                <?
                $query="SELECT *from population";
                $res=mysql_query($query) or ('Error in selection');
                while($row=mysql_fetch_array($res)){
				?>
                <tr>
				 <td>   <? echo $row['Id_Population']; ?> </td>
				 
                 <td> <?   echo $row['Fname']; ?> </td>
				 
                 <td> <? echo $row['Lname'];?> </td>
				 
				 <td> <?   echo $row['Sex']; ?> </td>
                 
             
				  
				 
                 <td> <?  echo $row['Relationship']; ?> </td>
                 
                  <td> <?   echo $row['Residence_statue']; ?> </td>
				  
				 
                   
                   
                 <td> <?  echo $row['Marital_statue']; ?> </td>
                 
                  <td> <?   echo $row['Dob']; ?> </td>
				  
				 
                 <td> <?  echo $row['Nationality']; ?> </td>
                 
                 <td> <?  echo $row['Religion']; ?> </td>
                 
                  <td> <?   echo $row['Problem']; ?> </td>
				  
				 
                 <td> <?  echo $row['Insurance']; ?> </td>
                 
                 <td> <?  echo $row['Language']; ?> </td>
                 
                  <td> <?   echo $row['Attend_School']; ?> </td>
				  
				 
                 <td> <?  echo $row['Level_Educat']; ?> </td>
                 
				  
				 
                 <td> <?  echo $row['Degree']; ?> </td>
				
                
                  <td> <?   echo $row['Work']; ?> </td>
                  
                    <td> <?   echo $row['Status_of_work']; ?> </td>
                    
                    
                      <td> <?   echo $row['Activity']; ?> </td>
                      
                        <td> <?   echo $row['Institution']; ?> </td>
                        
                        
                          <td> <?   echo $row['Spouse']; ?> </td>
                          
                          
                            <td> <?   echo $row['Nu_Children']; ?> </td>
                            
                            
                              <td> <?   echo $row['Nu_Lchildren']; ?> </td>
                              
                              <td> <?   echo $row['Nu_Mchildren']; ?> </td>
                              
                              <td> <?   echo $row['Nu_Fchildren']; ?> </td>
                              
                              <td> <?   echo $row['House_Id']; ?> </td>
                              
				  
				  
				  
				  
				  
				  
				  
                 </tr>
		<?
				}
                ?>
				 </table>
                 
                <form>
                <label> Select to see the persentage </label>
                <select name="sex">
                <option value="Male"> Male </option>
                <option value="Female">Female </option>
                </form>
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


