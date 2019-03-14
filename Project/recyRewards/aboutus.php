<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 12/24/2017
 * Time: 11:10 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4R's </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="bootstrap" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="validation.js"></script>


</head>
<body>

<div id="wrapper">
    <!-- Header menu  -->
    <header id="header_Style">
        <img src="img/imgRecycled.png" class="LogoImg">
        <div id="header">
            <h1>4R's</h1>
            <h2 >Reduce, Reuse, Recycle, Rewards</h2>
        </div>
        <div id = "headerSearch"class="form_Search">
            <img src="img/imgPrize.jpg" class="LogoImg1">
            <form action="search.php" method="post">
                <input type="search" id="mySerach" name = "Search" placeholder="Search">
                <button class = btn btn-green>Search</button>

            </form>

        </div>


    </header>

    <!-- Navigation Menu -->
    <nav>
        <div id="navmenu">
            <ul>
                <li> <a href="drop_off.php"><span>Drop Off</span></a> </li>
                <li><a href="aboutus.php"><span>About us</span></a></li>
                <li><a href="contactus.php"><span>Contact Us</span></a></li>
                <li><a href="register.php"><span>Signup</span></a></li>
                <li><a href="rewards.php"><span>Rewards</span></a></li>
                <li><a href="links.php"><span>Links</span></a> </li>

            </ul>
        </div>
    </nav>

    <!-- Share Menu -->
    <section class="content_section">
        <span class="connect_Text"> SHARE WITH US</span>
        <a class = "fa fa-facebook" href="#"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>
        <a href="#" class="fa fa-rss"></a>
    </section>
    <section class="content_section3">
        <h2>About us:</h2>
        <span>
            Recycle Rewards is an exciting and eco-friendly program that will teach individuals how and what to recycle in
            exchange for fun prizes and rewards.<br><br>

            <!--text altered 12/06/18 ariel -->

            Here at Recycle Rewards, we believe that care for the environment is of the utmost importance,
            and that implementing an effective and enjoyable system will encourage others to do the same.<br><br>

            Thus, Recycle Rewards was born!<br><br>

            Recycle Rewards is a user-friendly, auto-updated program, which records the amount of recyclable items
            that have been dropped off in exchange for points. <br><br>
            Users can create a profile, collect recyclable material from their community, and with the use of their
            uniquely assigned ID number, drop-off at designated locations in exchange for points.<br><br>

            As points build, the user is able to redeem prizes and rewards, based on how many points have been earned.
            The result is a cleaner environment, a more dedicated and educated population concerning waste, and many
            exciting and fun prizes and rewards!<br>
            </span>
    </section>

</div>
</body>
</html>