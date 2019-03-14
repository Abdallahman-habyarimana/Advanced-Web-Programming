<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 12/24/2017
 * Time: 11:10 AM
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RecycleRewards</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="bootstrap" type="text/css">
</head>
<body>
<div id="wrapper">
    <header id="header_Style">
        <img src="img/imgRecycled.png" class="LogoImg">
        <h1>Recycled Rewards</h1>
        <div class="form_Search">
            <form action="create.php" method="post">
                <input style="color: #0f0f0f" placeholder="Search contact" name="Search" type="text" required>
                <input type="submit" class="btn btn-default" name="btnSearch" value="Search">
            </form>
        </div>
        <img src="img/imgPrize.jpg" class="LogoImg1">
    </header>
    <nav>
        <div id="navmenu">
            <ul>
                <li> <a href="#"><span> List </span></a> </li>
                <li><a href="aboutus.php"><span>Update Rewards</span></a></li>
                <li><a href="contactus.php"><span>Manage</span></a></li>
                <li><a href="register.php"><span>Message</span></a></li>
            </ul>
        </div>
    </nav>

</div>
</body>
</html>
