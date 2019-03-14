<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 10/8/2017
 * Time: 9:55 AM
 */
include 'Function.inc.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <script type="javascript" src="js/bootstrap.js"></script>
    <script type="javascript" src="js/bootstrap.min.js"></script>
    <title>Contact</title>
</head>
<body>

<!-- A contract must at least have the following fields (you are free to add more if you need)
• * title
• * first name
• * last name
• email
• site
• cell number
• home number
• office number
• twitter URL
• facebook URL
• picture
• comment
* indicates the field is a mandatory field and must be presented when the form is
submitted.-->
<div id="wrapper">
    <form action="create.php" method="post" class="contact-form">
        <div class="header">
            <h1>Login Form</h1>
            <span>Fill out the form below to login to your right page .</span>
        </div>

        <input type="hidden" name="primaryKey" value="<?php echo getID();?>"
        <div class="input-large">
            <input type="text" name="firstName" placeholder="First Name" >
        </div>
        <input type="text" name="lastName" class="input-large" placeholder="Last Name" class="input-block-level"> <br/>
        <input type="text" name="title" placeholder="Title"  class="">  <br/>
        <input type="email" name="eMail" placeholder="email"> <br/>
        <input type="text" name="cellNumber" placeholder="Cell Phone"> <br/>
        <input type="text" name="homeNumber" placeholder="Home Phone"> <br/>
        <input type="text" name="officeNumber" placeholder="Office Phone"> <br/>
        <input type="url" name="twitterURL" placeholder="Twitter"> <br/>
        <input type="url" name="facebookURL" placeholder="Facebook"> <br/>
        <label> Upload Your Picture</label> <input type="image" name="conPicture" value="Upload"> <br/>
        <label>
            Comment
        </label>
        <textarea name="comment"> </textarea><br/>
        <input type="submit" name="btnSubmit" value="Create">
        <input type="submit" name="btnList" value="List" >

    </form>
    </article>
</div>

</body>
</html>

