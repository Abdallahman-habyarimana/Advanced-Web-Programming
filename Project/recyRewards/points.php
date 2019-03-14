<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 12/24/2017
 * Time: 11:10 AM
 */

?>

<!DOCTYPE html>
<!-- This page will display the prizes-->

<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RecycleRewards</title>
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
        <h1>Recycled Rewards</h1>
        <div class="form_Search">
            <form action="create.php" method="post">
                <input type="search" id="mySerach" name = "Search" placeholder="Search">
                <button class = btn btn-green>Search</button>
                <!--
                <input style="color: #0f0f0f" placeholder="Search" name="Search" type="text">
                <input type="submit"  name="btnSearch" value="Search">-->
            </form>
        </div>
        <img src="img/imgPrize.jpg" class="LogoImg1">
    </header>

    <!-- Navigation Menu -->
    <nav>
        <div id="navmenu">
            <ul>
                <li> <a href="user_index.php"><span>Home</span></a> </li>
                <li> <a href="drop_off.php"><span>Drop Off</span></a> </li>
                <li><a href="scanCode.php"><span>InputPoint</span></a></li>
                <li><a href="contactus.php"><span>Contact Us</span></a></li>
                <li><a href="logout.php"><span>Logout</span></a></li>
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

    <section class="content_section1">

        <h2>Points</h2>
        <span> Check Your Points here!   </span>


    </section>


    <section class="content_section2">
        <table width=100% class="tabelLines"> <!--text altered 12/06/18 ariel -->
            <tr>
                <th width="10%" align="center">Number Of Bags </th>
                <th width="10%" align="center">Points </th>
                <th width="20%" align="center">Date Points Received </th>
                <th width="15%" align="center">Expiry Date </th>

            </tr>

            <?php
            include "functions.php";

            $reward = getPoints();
            // output data
            foreach ($reward as $row){
                echo "<tr>";
                echo"<td width='20%' align='center'>".$row["user_NumBags"]."</td>";
                echo"<td width='20%' align='center'>".$row['user_Points']."</td>";
                echo"<td width='20%' align='center'>".$row['user_PointDate']."</td>";
                echo"<td width='20%' align='center'>".$row['user_PointExpireDate']."</td>";

                echo"</tr>";
            }
            ?>



        </table>
    </section>
</div>
</body>
</html>
