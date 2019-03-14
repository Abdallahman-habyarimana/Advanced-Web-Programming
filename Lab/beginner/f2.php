<?php
/**
 * Created by PhpStorm.
 * User: 101087205
 * Date: 20/09/2017
 * Time: 12:50 PM
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="#">
    <input type="text" name="txtfirstname" > <br/><br/>
    <input type="text" name="txtlastname" > <br/><br/>
    <input type="text" name="txtstudent" > <br/><br/>
    <input type="submit" name="sbtbutton">

</form>

<?php
$fsName = isset($_POST['txtfirstname']) ? $_POST['txtfirstname'] : '';
$lsName =isset($_POST['txtlastname']) ? $_POST['txtlastname'] : '';
$stNumber = isset($_POST['txtstudent']) ? $_POST['txtstudent'] : '';

echo "First Name :". $fsName ."<br/>";
echo "Last Name : ". $lsName. "<br/>";
echo "Student Number :". $stNumber ."<br/>";
?>
</body>
</html>
