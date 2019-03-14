<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 10/1/2017
 * Time: 6:31 PM
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY FORM</title>
</head>
<body>
<form method="post">
    <label for="color">Color</label>
    <input type="text" id="color" name="color">
    <input type="submit">
</form>


<a href="?color=green">Green</a>
<?php
const BR ='<br/>';
/*if($_SERVER['REQUEST_METHOD']=='GET')
        $The_request = $_GET;
    else
        $The_request = $_POST;

    print("color value is " . $The_request['color']);
    print BR;*/
$i=0;
++$i;
echo $i;

?>

</body>
</html>
<?php
show_source(__FILE__);
