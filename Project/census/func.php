<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne()
{

		
		   echo '<option value="None"> None </option>';
		   echo '<option value="Neverattended">Has never attended </option>';
		     echo '<option value="attended">Has ever attended</option>';
		     echo '<option value="Is currently attending"> Is currently attending school</option>';

}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func'] == "drop_1" && isset($_GET['func'])) { 
   drop_1($_GET['drop_var']); 
}

function drop_1($drop_var)
{  

	
    if($drop_var=='attended') {
	echo '<select name="tier_two" id="tier_two">
	      <option value=" " disabled="disabled" selected="selected"> B14.What is the highest level of education attended?</option>';
			  echo ' B14.What is the highest level of education attended?';
		echo '<option> Preschool </option>';
		echo '<option>Primary </option>';
	    echo '<option>Secondary</option>';
		echo '<option> University </option>';
	echo '</select> ';
	echo '<input type="text" name="Number">';}
}
}
?>