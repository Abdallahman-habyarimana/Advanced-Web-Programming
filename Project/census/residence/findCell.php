<? 
$provi=intval($_GET['province']);
$distr=intval($_GET['district']);
$sect=intval($_GET['sector']);
require_once('../db_connect.php');
$query="SELECT Id,Cell FROM cell WHERE Id_Province='$provi' AND Id_district='$distr' AND Id_sector='$sect'";
$result=mysql_query($query);

?>
<select name="cell" onChange="getVillage(<?=$provi?>,<?=$distr?>,<?=$sect?>,this.value)">
<option>Select City</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['Id']?>><?=$row['Cell']?></option>
<? } ?>
</select>
