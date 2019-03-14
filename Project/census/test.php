<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
<select name="box1" id="box1" onChange="CheckDistrict();">
<option value="#"> Select Province </option>
<?

				require_once('db_connect.php');
                $query="SELECT *from province order by Id_Province";
                $result=mysql_query($query) or ('Error in selection');
               
				while($provi=mysql_fetch_array($result)){ ?>
				<option  value="<? echo $provi['Id_Province'];?>"> <? if(isset($_GET['pro']) && $_GET['pro']==$provi['Id_Province']) { ?> SELECTED <? }?> <? echo $provi['Name']; ?> 
                </option>  <? } ?> </select>
                	
              <!-- <select name="box2" id="box2" onChange="Checksector();">
                <option selected="selected"> Select District </option> -->
                <? if(isset($_GET['pro']))
                  {
                /*$qry="SELECT * FROM district";
                $res=mysql_query($qry);
                while($dis=mysql_fetch_array($res)){
				if($dis['Id_Province']==$_GET['pro'])
{?>
<!-- <option value=" <?php echo $dis['Id_district'];?> "> <?PHP echo $dis['district']; ?> </option>
<?php }*/
echo $_GET['pro'];

}
?>
</select>
</form>
</body>
</html>
<script>
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
// Function chesksector

function Checksector()
{
var dist=document.getElementById('box2');
var pro=document.getElementById('box1');
var userid=document.getElementById('userid');

if(pro.value!=" && userid.value!=" && userid.value!=")
{
window.location.href.php?pro="+pro.value+"&district="+dist.value+"&userid="+userid.value;
}
else if(pro.value!=")
{
window.location.href="test.php?pro="+pro.value+"&district="+dist.value;
}
}

function Checkcell()
{
var sect=document.getElementById('box3');
var dist=document.getElementById('box2');
var pro=document.getElementById('box1');
var userid=document.getElementById('userid');

if(pro.value!=" && userid.value!=" && userid.value!=")
{
window.location.href.php?pro="+pro.value+"&district="+dist.value+"$sector="+sect.value+"&userid="+userid.value;
}
else if(pro.value!=")
{
window.location.href="index.php?pro="+pro.value+"&district="+dist.value;
}
}
</script>

