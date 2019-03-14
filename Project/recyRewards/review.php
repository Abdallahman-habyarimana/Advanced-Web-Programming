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
                <li> <a href="index.php"><span>Home</span></a></li>
                <li><a href="register.php"><span>Signup</span></a></li>
                <li><a href="rewards.php"><span>Rewards</span></a></li>
                <li><a href="review.php"><span>Reviews</span></a></li>
                <li> <a href="drop_off.php"><span>Drop Off</span></a> </li>
                <li><a href="aboutus.php"><span>About us</span></a></li>
                <li><a href="contactus.php"><span>Contact Us</span></a></li>
                <li><a href="links.php"><span>Links</span></a> </li>
            </ul>
        </div>
    </nav>

    <!-- Share Menu -->
    <section class="content_section">
        <span class="connect_Text"> SHARE WITH US</span>
        <a class = "fa fa-facebook" href="#"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>
        <a href="#" class="fa fa-rss"></a>
    </section>

    <!-- Display reviews-->
    <section class=content_section2>
        <table width=100% class=tabelLines>
            <tr>
                <th width="50%" align="center">Review </th>
                <th width="10%" align="center">Author </th>
                <th width="10%" align="center">Date </th>
                <?php
                    include "functions.php";
                    $review = insert_Review();
                    // output data
                    foreach ($review as $row)
                    {
                        echo "<tr>";
                        echo"<td width='60%' align='center'>".$row['content']."</td>";
                        echo"<td width='20%' align='center'>".$row['author']."</td>";
                        echo"<td width='10%' align='center'>".$row['date']."</td>";
                        echo"</tr>";
                    }
                ?>
    </section>
</div>
</body>
</html>
