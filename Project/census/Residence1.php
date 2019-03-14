
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
<select name="province" id="prov1" onchange="CheckDistrict();">
<option value="#"> Select Province </option>
<?
 require_once('db_connect.php'); 
$provi="SELECT *FROM province order by Id_Province";
$query=mysql_query($provi);

while($row=mysql_fetch_array($query)) {
?>
<option value="<? echo $row['Id_Province'];?>"> <? echo $row['Name'];?></option>
</select>
</form>
<?
}
?>
</body>
</html>
<script language="javascript">
function CheckDistrict()
{
var pro=document.getElementById('box1');
var dist=document.getElementById('box2');
var userid=document.getElementById('userid');

if(pro.value!=" && userid.value!=")
{
window.location.href.php?pro="+pro.value+"&userid="+userid.value;
}
else if(pro.value!=")
{
window.location.href="test.php?pro="+pro.value;
}
}
</script>