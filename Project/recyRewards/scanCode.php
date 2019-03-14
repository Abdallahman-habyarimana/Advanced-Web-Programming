<?php

include 'functions.php';
if(!empty($_SESSION['user_Id'])) // Check if a session is not empty
    $id = $_SESSION['user_Id']; // the variable $id take session number every time when session is not empty

?>
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
                <li><a href="points.php"><span>Points</span></a></li>
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
        <form action="create.php" method="post">
            <select  name="type">
                <option>Select</option>
                <option value="Small">Small</option>
                <option value="Big">Big</option>
            </select><br>
            <select id="Nbag" name="nBags">
                <option>Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select><br>
            <input type="submit" value="Get Point" name="get_Point">

        </form>
    </section>
</div>
</body>
</html>
