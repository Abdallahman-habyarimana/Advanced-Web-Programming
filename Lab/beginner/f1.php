<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 9/24/2017
 * Time: 8:20 AM
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
<h2>PHP Form Validation Example</h2>
<p><span class="error">required field.</span></p>
<form method="post" action="#">
    Name: <input type="text" name="name" >
    <span class="error"></span>
    <br><br>
    E-mail: <input type="text" name="email" >
    <span class="error"></span>
    <br><br>
    Website: <input type="text" name="website" >
    <span class="error"></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender"value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error"></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $_POST['name'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['website'];
echo "<br>";
echo $_POST['comment'];
echo "<br>";
echo $_POST['gender'];
?>

</body>
</html>