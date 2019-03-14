<!--//------------------------------------+
//  Developed by Habyarimana Abdallahman  |
//  email-habdallah05@yahoo.fr            |
//---------------------------------+------>
<? 
$provinceId=intval($_GET['province']);
$districtId=intval($_GET['district']);
require_once('../db_connect.php');
$query="SELECT Id,sectorname FROM sector WHERE Id_Province='$provinceId' AND Id_district='$districtId'";
$result=mysql_query($query);

?>
<select name="sector" onchange="getCell(<?=$provinceId?>,<?=$districtId?>,this.value) ">
<option> -- Select Sector -- </option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['Id']?>><?=$row['sectorname']?></option>
<? } ?>
</select>
