<?
if(isset($_POST['submit']))
{
session_start();
require_once('db_connect.php');
if(isset($_POST['submit'])){
$number=$_POST['number'];
$idnumber=$_POST['Idnumber'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$relation=$_POST['relation'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$statues=$_POST['statues'];
$nationality=$_POST['nationality'];
$living=$_POST['living'];
$religion=$_POST['religion'];
$problem=$_POST['problem'];
$health=$_POST['health'];
$language=$_POST['language'];
$school=$_POST['school'];
$education=$_POST['education'];
$certificate=$_POST['certificate'];
$work=$_POST['work'];
$statwork=$_POST['statwork'];
$activity=$_POST['activity'];
$sector=$_POST['sector'];
$marital=$_POST['marital'];
$spause=$_POST['spause'];
$Live=$_POST['Live'];
$children=$_POST['children'];
$Lmale=$_POST['Lmale'];
$Female=$_POST['Lfemale'];
$dat=date('Y,m,d');
for($i=1; $i<=sizeof($fname); $i++)
{

$query[$i] ="INSERT into population VALUES('','$fname[$i]','$lname[$i]','$sex[$i]','$relation[$i]','$statues[$i]','$marital[$i]','$dob[$i]','$nationality[$i]','$religion[$i]','$problem[$i]','$health[$i]','$language[$i]','$school[$i]','$education[$i]','$certificate[$i]','$work[$i]','$statwork[$i]','$activity[$i]','$sector[$i]','$spause[$i]','$children[$i]','$Live[$i]','$Lmale[$i]','$Female[$i]','$idnumber[$i]')";
$result[$i]=mysql_query($query[$i]) or ('Error to Insert');
/*
echo $fname[$i]; echo '<br>';
echo $lname[$i];echo '<br>';
echo $relation[$i]; echo '<br>';
echo $sex[$i];echo '<br>';
echo $dob[$i]; echo '<br>';
echo $statues[$i]; echo '<br>';
echo $nationality[$i];echo '<br>';
echo $living[$i]; echo '<br>'; 
echo $religion[$i]; echo '<br>';
echo $language[$i]; echo '<br>';
echo $problem[$i]; echo '<br>';
echo $health[$i]; echo '<br>';
echo $activity[$i]; echo '<br>';
echo $sector[$i]; echo '<br>';
echo $marital[$i]; echo '<br>';
echo $spause[$i]; echo '<br>';
echo $children[$i]; echo '<br>';
echo $Lmale[$i]; echo '<br>';
echo $Female[$i]; echo '<br>';
echo $school[$i]; echo '<br>';
echo $statwork[$i]; echo '<br>';
echo $education[$i]; echo '<br>';
echo $work[$i]; echo '<br>';
echo $certificate[$i]; echo '<br>';*/
if($result[$i])
{

}
}
?>
<script type="text/javascript">
    alert(' Confirmation of enumeration');
    </script>
    <meta http-equiv="refresh" content="0; URL=Enumerationprocess.php" />
<?
  }
  }
  ?>
