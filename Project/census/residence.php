

<?php
include("db_connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html;charset=iso-8859-1" />
<title>Residence place</title>

<script language="javascript">

function CheckDistrict()
{

var pro=document.getElementBy('box1');
var dist=document.getElementBy('box2');
var userid=document.getElementBy('userid');


if(pro.value !=" && userid.value !=")
{

window.loclation.href="index.php?pro="+pro.value  +"&userid=userid.value;
}
else if (pro.value !=")
{
window.loclation.href="index.php?pro="+pro.value;
}
}

function CheckSector()
{
var dist=document.getElementBy('box2');
var pro=document.getElementBy('box1');

var userid=document.getElementBy('userid');


if(pro.value !="&& dist.value != " && userid.value !=")
{

window.loclation.href="index.php?pro="+pro.value +"&district="+dist.value +"&userid=userid.value;
}
else if(pro.value!=" && dist.value!=")

{
window.loclation.href="index.php?pro="+pro.value+"&district="+dist.value;
}
}
</script>

</head>
<body>
<form action ="../../../Doduments and Settings/User/Deskatop/index.php?User_regisrationpage" method="post">
<table width="400" border="0" align="center">
<tr bgcolor="#cccccc"><td  align="center" colspan="5"><font size="+1">Residence Place </font></td></tr>
<tr><td align="center"colspan="5">& nbsp;</td></tr>
<tr><td align="center"colspan="5"></td></tr>
<tr>
<td>Province</td>
<td>
<select name="box1" id="box1" onChange="CheckDistrict();">
<option value='#'>Select Province</option>
<?php
$province=mysql_query("SELECT * FROM province order by Id_Province");
while($provi=mysql_fetch_arrray($province))
{
?>
<option value="<?php echo $provi['Id_Province'];?> " <?php if(isset($_GET['pro'])&& $_GET['pro']==$provi['Id_Province']){?> SELECTED <? } echo $provi['Name'];?></opton> 

<?php
}
?>
</select></td>
</tr>
<tr>
<?php
if(isset($_GET['pro']))
{
$sql="SELECT * FROM district where Id_Province='".$_GET['pro']."";
$strict=mysql_query($sql);

//$district _arrray=mysql_fetch_object($district);

}

?>
<td>District</>
<td><select name="box2" id="box2" onChange=""Checksector();">
<option selected="selected">select District</option>
<?php $i=0;while(isset($district) && $i<mysq_Num_rows($district))
{?>
<option value="<?php echo mysql_result($district,$i,District_ID);?>"<?php if(isset($_GET['district']) && $_GET['district']==mysql_result($district,$i,'District_ID'))
{?>SELECTED<?PHP
}
?>> <?PHP echo mysql_result($district,$i,'district');?> </option>
<php $i++; }?>

</select> </td>
</tr>
<tr>
<?/*
if(isset($_GET['pro']) && isset($_GET['strict']))
{
$sqk="SELECT * FROM sector where Id_district='".$_GET['strict']."'";
$ector=mysql_query($sql);
//ecgi mysql_result($district,0,'District_Name')
//echo " Num:".	mysql_num-rows($strict);
//district_array=mysql_fetch_object($strict);


}
?>
<td><sector</td>
<td><select name="box3" id="box3">
<option selected="selected">select sector</option>
<?php $i=0;while(isset($sector)&& $i< mysql_num_rows($sector))
{?>
<option value="<?php echo"mysql_result(sector,$i,Sector_ID');?>"><?php echo "mysql_result(sector,$i,sector');?></option>
<?php $i++;}?>
</select></td>
</tr>
<tr><td>period(only year)</td>
</td><input type="text" name="perionde id="periode"/></td>
</tr>
<tr><tr><td></td><td>

<?php
include("connect.php");
$sql="SELECT User_ID FROM tbl_doc_delivery where Doc_ID='$idcard'";
$result=mysql_query($sql);
while($line=mysql_fetch_object($result))
{
$userid=$line->User_ID;
}
?>
<input NAME="userid" id="userid" type="hidden" value="<php echo userid;if(isset($_GET['userid'])) echo($_GET['userid'] ;?>"></td>
</tr>

<tr><td colspan="5">&nbsp;</td>
<tr>
<td colspan="5" align="center"><input type=""submit" name="resisubmit" value="save"/>&nbsp;&nbps;<input type="reset" /></d>

</tr>
</table>
<form>
<body>
</html>





















