<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 12/24/2017
 * Time: 11:10 AM
 */
?>
<!DOCTYPE html>

<!-- This page displays the list of Schools to drop off -->

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
                <li><a href="index.php"><span>Home</span></a></li>
                <li><a href="register.php"><span>Signup</span></a></li>
                <li><a href="rewards.php"><span>Rewards</span></a></li>
                <li><a href="drop_off.php"><span>Drop Off</span></a> </li>
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
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>
        <a href="#" class="fa fa-rss"></a>
    </section>


    <section class="content_section3">
        <h2> Drop off Schools</h2>
            <span>
                Here is a list of locations where you can safely and easily dispose of your recyclables. <br><br>
                Each location is equipped with a drop-off box, which will accept your bag of materials
                and record the transaction for future rewards.<br><br>
                Simply scan your unique ID tag which is recorded on your recycle bag. <br><br>
                Drop the bag in the box and you’re done! You can view your Rewards points on your profile,
                which will be automatically updated after the drop-off.<br><br>
            </span>
    </section>

    <section >
        <section class="dropoff">
            <table width=100% class=tabelLines>
            <tr>
            <th width="30%" align="center">Drop Off Name </th>
            <th width="10%" align="center">Phone </th>
            <th width="15%" align="center">Address</th>
            <th width="10%" align="center">City</th>
            <th width="10%" align="center">Province</th>
            <th width="25%" align="center">Postal Code</th>
            </tr>
                <?php
                    include "functions.php";
                    $dropOff = insert_DropOofArea();
                    // output data
                    foreach ($dropOff as $row)
                    {
                        echo "<tr>";
                        echo"<td width='20%' align='center'>".$row['School_Name']."</td>";
                        echo"<td width='20%' align='center'>".$row['School_Phone']."</td>";
                        echo"<td width='20%' align='center'>".$row['School_Address']."</td>";
                        echo"<td width='10%' align='center'>".$row['School_City']."</td>";
                        echo"<td width='5%' align='center'>".$row['School_Province']."</td>";
                        echo"<td width='8%' align='center'>".$row['School_PostalCode']."</td>";
                        echo"</tr>";
                    }
                ?>
            </table>
        </section>
    </div>
    </body>
    </html>
