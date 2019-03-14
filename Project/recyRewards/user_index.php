<?php
include 'functions.php';
if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){
    $points = user_Profile();


    /* echo $name = $_SESSION['name'];
       echo $user_Id = $_SESSION['User_ID'];
       echo $address = $_SESSION['Address'];
   // echo $Postal_code = $_SESSION['Postal_Code'];
    $link = db_Connect();
    $query = "SELECT $user_Id, $name, $address, $Postal_code  FROM 'user_table'";
    $result = $con->query($query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['user_Id'] = $row['user_Id'];
    $result = mysqli_query($con, $query) or die("Connection Error: " . mysqli_error($con) . "<hr>\nQuery: $query");

    while($row = $result->fetch_assoc()) {
        echo " " . $row["name"]. " " . $row["User ID"]. " " . $row["Address"].  " " . $row["Postal Code"]."<br>";
    }


}

else{
    echo "No results found";
}*/
}


?>




<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RecycleRewards</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="wrapper">
    <!-- Header menu -->
    <header id="header_Style">
        <img src="img/imgRecycled.png" class="LogoImg">
        <h1>Recycled Rewards</h1>
        <div class="form_Search">
            <form action="create.php" method="post">
                <input type="search" id="mySerach" name = "Search" placeholder="Search">
                <button class = btn btn-green>Search</button>
            </form>
        </div>
        <img src="img/imgPrize.jpg" class="LogoImg1">
    </header>

    <!-- Navigation Menu -->
    <nav>
        <div id="navmenu">
            <ul>
                <li> <a href="#"><span>Home</span></a> </li>
                <li> <a href="drop_off.php"><span>Drop Off</span></a> </li>
                <li><a href="aboutus.php"><span>About us</span></a></li>
                <li><a href="contactus.php"><span>Contact Us</span></a></li>
                <li><a href="points.php"><span>Points</span></a></li>
                <li><a href="scanCode.php"><span>Scan</span></a></li>
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
    <section class="dropoff">

        <!--Text altered 01/05/18 Ariel -->

        <h1> Welcome to your Profile</h1>
        <p>
            Listed below are your user details
        </p>
        <table width=100% class="tablLines">
            <tr>

                <td width="15%" align="center">Address</td>
                <td width="15%" align="center">Postal Code</td>
                <td width="5%" align="center">Points</td>
            </tr>
         <tr>
             <td width="15%" align="center"> <?php   echo  $_SESSION['Address'];?></td>
             <td width="15%" align="center"><?php   echo  $_SESSION['Postal_Code'];?></td>
             <td width="5%" align="center"><?php   echo  $points;?></td>
         </tr>
        </table>
    </section>
</div>
</body>
</html>


