<!--//------------------------------------+
//  Developed by Habyarimana Abdallahman  |
//  email-habdallah05@yahoo.fr            |
//---------------------------------+------>
<?
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://roshanbh.com.np
?>

<? $province=intval($_GET['province']);
require_once('../db_connect.php');
$query="SELECT Id,districtname FROM district WHERE Id_Province='$province'";
$result=mysql_query($query);

?>
<select name="district" onchange="getSector(<?=$province?>,this.value)">
<option> -- Select District --</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['Id']?>><?=$row['districtname']?></option>
<? } ?>
</select>
