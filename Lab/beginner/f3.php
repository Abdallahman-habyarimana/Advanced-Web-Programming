<?php
/**
 * Created by PhpStorm.
 * User: 101087205
 * Date: 20/09/2017
 * Time: 1:32 PM
 */
?>
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

function submiFunction($fsName,$lsName,$stNumber)
{
    /*$fsName = isset($fsName) ? $_POST['txtfirstname'] : '';
    $lsName = isset($_POST['txtlastname']) ? $_POST['txtlastname'] : '';
    $stNumber = isset($_POST['txtstudent']) ? $_POST['txtstudent'] : '';*/
    $fsName = isset($fsName) ? $fsName : '';
    $lsName = isset($lsName) ? $lsName : '';
    $fsName = isset($stNumber) ? $stNumber : '';

}
if(isset($_POST['sbtbutton'])) {
    submiFunction($_POST['txtfirstname'],$_POST['txtlastname'], $_POST['txtstudent'] );

    echo "First Name :" . $fsName . "<br/>";
    echo "Last Name : " . $lsName . "<br/>";
    echo "Student Number :" . $stNumber . "<br/>";
}
else{
?>
<script type="javascript">
    me.load();
    <script>
    <?php
    }
    ?>

    </body>
    </html>
