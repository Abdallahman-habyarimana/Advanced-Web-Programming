<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4R's </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
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
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>
        <a href="#" class="fa fa-rss"></a>
    </section>
    <div class="login-page">
        <div class="form">
        <h1>Sign in</h1>
        <form action="create.php" method="post">
            <input name="userName" type="text" PLACEHOLDER="Username"><br>
            <input name="new_Password" type="password" placeholder="Password"><br>
            <input type="submit" value="Log in" name="Login">
        </form>
        </div>
    </div>

    <aside class="register_section">
        <div class="register-form">
    <h1>Register first</h1>
    <form action="create.php" method="post">
        <label>Type</label>
        <select id="type" name="type" onchange="showSchool()" required>
            <option value=""> --Select Type -- </option>
            <option value="School">School</option>
            <option value="Individual">Individual</option>
        </select><br>
        <div id="individual" style="display:block">
        <label>First Name</label>
        <input type="text" name="firstName" placeholder="First Name"><br>

        <label>Last Name</label>
        <input type="text" name="lastName" placeholder="Last Name"><br>
        </div>
        <div id="School_Input" style="display:none">
            <label>School Name</label>
            <input name="schoolName" type="text" ><br>

            <label>Contact</label>
            <input name="schoolContact" type="text"><br>

            <label>Number of Rooms</label>
            <input name="numberOfRoom" type="text"><br>
        </div>

        <label>Cell number</label>
        <input name="cellNumber" type="text"><br>

        <label>Email</label>
        <input name="eMail" type="email"><br>

        <label>Address</label>
        <input name="Address" type="text"><br>

        <label>Postal Code</label>
        <input name="Postal_Code" type="text"><br>

        <label>Province</label>

        <select name = "Province" required>
            <option value="">-- Select Province -- </option>
            <option value="AB">Alberta</option>
            <option value="BC">British Columbia</option>
            <option value="MB">Manitoba</option>
            <option value="NB">New Brunswick</option>
            <option value="NL">Newfoundland and Labrador</option>
            <option value="NS">Nova Scotia</option>
            <option value="ON">Ontario</option>
           </select><br>

        <label>City</label>
        <input name="City" type="text"><br>

        <label>Create Password</label>
        <input name="new_Password" type="password"><br>

        <label>Confirm Password</label>
        <input name="confirm_Password" type="password"><br>

        <input type="submit" value="Register" name="Register">
    </form>
    </aside>
</div>

</body>
</html>
