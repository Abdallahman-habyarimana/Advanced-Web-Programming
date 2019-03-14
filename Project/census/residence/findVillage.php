<? $provi=intval($_GET['province']);
$distr=intval($_GET['district']);
$sect=intval($_GET['sector']);
$cellId=intval($_GET['cell']);
require_once('../db_connect.php');
$query="SELECT Id,Village FROM village WHERE Id_Province='$provi' AND Id_district='$distr' AND Id_sector='$sect' AND Cell_Id='$cellId'";
$result=mysql_query($query);

?>
<select name="village">
<option>Select Village</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['Id']?>><?=$row['Village']?></option>
<? } ?>
</select>
