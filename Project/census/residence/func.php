<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne()
{

		
		   echo '<option value="5"> 5</option>';
		    echo '<option value="20"> 20 </option>';
             echo '<option value="50"> 50 </option>';
			  echo '<option value="100"> 100 </option>';
}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func'] == "drop_1" && isset($_GET['func'])) { 
   drop_1($_GET['drop_var']); 
}

function drop_1($drop_var)
{  
                    require_once('../db_connect.php');
                    $q="SELECT *from population";
                    $r=mysql_query($q) or ('Error in selection');
				      $fetch_counter=0;
				 while($p=mysql_fetch_array($r)){
				 for($i=1; $i<=$drop_var;$i++){
                 echo '<tr>';
				 echo '<td>'; echo $p['Id_Population']; echo '</td>'; echo '<td>';echo $p['Fname']; echo '</td>';echo '<td>';echo $p['Lname']; echo '</td>';echo '<td>';echo $p['Sex']; echo '</td>';echo '<td>';echo $p['Relationship']; echo '</td>';echo '<td>';echo $p['Marital_statue']; echo '</td>';echo '<td>';echo $p['Religion']; echo '</td>';echo '<td>';echo $p['Insurance']; echo '</td>';echo '<td>';echo $p['Language']; echo '</td>';
				 echo '</tr>';
				
        }
		}
		}
?>