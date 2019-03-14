<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Modify your Name </title>
</head>
<?php

require 'Function.inc.php';


if(isset($_GET['prKey']))
{
    $pKey=$_GET['prKey'];
    $contact= search_Contact();
}

?>
<body>
<div id="wrapper">


        <div class="header">
            <h1>EDIT CONTACT</h1>
        </div>
    <form name="login-form" class="contact-form" action="create.php" method="post">

        <div class="content">
            <?php
            foreach ($contact as $row => $line) {
            if ($row == $pKey){
                echo $line['FirstName'];
            ?>
            <table>
                <tr>
                    <td>
                        <input type="hidden" name="primaryKey" class="input-large"
                               value="<?php echo $line['primaryKey']; ?>">
                        <input type="text" name="firstName" class="input-large" value="<?php echo $line['FirstName'];?>">
                        <div class="user-icon"></div>
                    </td>
                    <td>
                        <input type="text" name="lastName" class="input-large" value="<?php echo $line['lastName'];?>">
                        <div class="user-icon"></div>
                    </td>
                </tr>
                <tr>
                    <td><Select name="title" placeholder="<?php echo $line['title']; ?>">
                            <option value
                            "Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                        </Select>
                    </td>
                    <td></td>
                </tr>
                <div class="user-icon"></div>
                <tr>
                    <td>
                        <input type="email" name="eMail" placeholder="email" value="">
                        <br/>
                    </td>
                    <td>
                        <input type="text" name="cellNumber" placeholder="Cell Phone"> <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="officeNumber" placeholder="Office Phone"> <br/>
                    </td>
                    <td>
                        <input type="text" name="homeNumber" placeholder="Home Phone"> <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="url" name="twitterURL" placeholder="Twitter"> <br/>
                    </td>
                    <td>
                        <input type="url" name="facebookURL" placeholder="Facebook"> <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Upload Your Picture</label>
                    </td>
                    <td>
                        <input type="image" name="conPicture" value="Upload">
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <textarea name="comment" placeholder=" Enter Your Comment Here"> </textarea>
                    </td>
                </tr>

            </table>
        </div>
    <?php
    }

}?>
        <div class="footer">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="btnModify" value="Modify" class="button" />
                    </td>
        </div>
    </form>
    <td>
        <a href="ListContact.php"> <input type="button" name="btnList" value="List Contact" class="button" /> </a>
    </td>
    </tr>
    </table>
</div>
<div class="gradient"></div>
</body>
</html>
