<?php

include 'functions.php';
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

    <!-- Section 01 -->
    <section class="content_section1">
        <h2>What we will do</h2> <!--text altered 12/06/18 ariel -->
            <span> Recycle Rewards is dedicated to creating a more environmentally educated and sustainable community. <br>
                Through our unique and innovative platform, we facilitate individuals, classrooms and entire schools to actively <br>
                work together to collect recyclable materials and dispose of them at our clean, safe, designated drop-off areas. <br>
                Each user will collect points for every bag of recyclable material that is collected and dropped off. Points can be saved <br>
                and redeemed to earn unique and exciting prizes across the city. Whether it is free cinema tickets, discounted passes to Toronto <br>
                landmarks such as the CN Tower, or vouchers for free meals at exclusive restaurants; each reward is earned with a sense of pride <br>
                of an environmentally sound community. Our goal is to help others reduce, reuse, recycle, and gain Rewards!
            </span>
    </section>

    <!-- Section 02 (Quote) -->
    <section class="section_quote">
        <h2>Quotes</h2>

        <!-- display quotes-->
        <span>
            <?php
            $a = displayQuotes();
            $a= implode('',$a);
            echo $a;
            ?>
        </span>
    </section>

    <!-- Aside 01(Panel Knowledge)-->
    <aside class="panel_aside">
        <div class="panel_aside_Title">
           <h2>Knowledge</h2>
        </div>
        <div class="panel_aside_Content">
            <ul>
               <li><a href="#openModal">Why we Recycled</a><br>
                    <div id="openModal" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Why do we Recycle</h2> <!--text altered 12/06/18 ariel -->
                            <p>Recycling is a very important practice that can help the derail the negative impact that waste has upon our natural environment. <br>
                                The act of recycling preserves the resources that are used by society.<br>
                                In essence, everything that is needed for our well-being and survival has a direct impact upon our planet. <br>
                                The act of recycling ensures that society does not over use, deplete, or dispose of material in a way that harms the
                                planets equilibrium. <br>
                                Recycling is a means to maintain ecological harmony and protection between humans and nature.</p>
                        </div>
                    </div>
               </li>
               <li><a href="#openModal1">What we Recycled</a>
                    <div id="openModal1" class="modalDialog1">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>What we Recycle</h2>
                            <ul>
                                <li>Aluminium cans</li>
                                <li>Cans</li>
                                <li>Cardboard</li>
                                <li>Food Boxes</li>
                                <li>Glass (bottles and jars)</li>
                                <li>Magazines, Mail, Newspaper and Paper</li>
                                <li>Metal</li>
                                <li>Plastic (bags and bottles)</li>

                            </ul>
                        </div>
                    </div>
               </li>
               <li><a href="#openModal2">Recycle Tips</a>
                    <div id="openModal2" class="modalDialog2">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Recycle Tips</h2>
                            <ul>
                                <li>Before you recycle, reuse. </li>
                                <li>Food container
                                    <ol>
                                        <li>Rinse clean.</li>
                                        <li>Remove food, liquids, contents before recycling.</li>
                                    </ol>
                                <li>Save water and time when recycling cans and bottles.
                                    <ol>
                                        <li>You do not have to clean them out or remove their labels and lids. <br>
                                            Just ensure they are empty.</li>
                                    </ol>
                                </li>
                                <li>Plastic, glass and metal containers can be cleaned if you have the time. <br>
                                    <ol>
                                        <li>Doing to avoids contaminating other materials, reduces unpleasant odours and the development of mould and,
                                            generally, ensures sorting centre employees work in a healthier environment.</li>
                                    </ol>
                                </li>
                                <li>Newspapers, magazines, and white paper can all be recycled as long as the paper is clean and dry.<br>
                                    <ol>
                                        <li>Plastic wrap, stickers, or rubber bands should be removed, but staples and plastic window envelopes are okay.</li>
                                        <li>Put it paper in a clear plastic bag.</li>
                                    </ol>
                                </li>    <!--text altered 12/06/18 ariel -->
                                <li>Separate plastic bags/over-wrap from newspapers, fliers, magazines, water/soft drink cases. Recycle separately.</li>
                            </ul>
                        </div>
                    </div>
               </li>
            </ul>
   </div>
</aside>
    <!--  Aside 02 (Panel Review)-->
    <div class="panel_review">
        <div class="panel_review_Title">
            <h2>Review</h2>
        </div>
        <div class="panel_review_Content">
            <ul class="panel_review_Content ">
                <li><a href="#openModal0">Review 01</a>
                    <div id="openModal0" class="modalDialog10">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Review</h2>
                            <span>
                            <?php
                            $a = displayQuotes();
                            $a= implode('',$a);
                            echo $a;
                            ?>
                            </span>
                        </div>
                    </div>
                </li>
                <li><a href="#openModal11">Review 02</a>
                    <div id="openModal11" class="modalDialog11">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Review</h2>
                            <span>
                            <?php
                            $a = displayQuotes();
                            $a= implode('',$a);
                            echo $a;
                            ?>
                            </span>
                        </div>
                    </div>
                </li>

            </ul>

        </div>

    </div>
</div>
<!--  Aside 03(Panel Decompose)-->
<aside class="panel_decompose">
    <div class="panel_decompose_Title">
        <h2>How Long Does It Take Garbage to Decompose?</h2>
    </div>
    <div class="panel_decompose_Content">
        <ul>
            <li><a href="#openModal3">Aluminum Cans</a><br>
                <div id="openModal3" class="modalDialog3">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Aluminum Cans</h2>
                        <p>Aluminum cans take 80-200 years in landfills to get completely decomposed<br><br>
                            Every minute, every day, more than 120,000 aluminum cans are recycled only in America.<br><br>
                            But, at the same time, in every three-month period, enough aluminum cans are thrown<br><br>
                            away in America that can rebuild the entire American commercial air fleet.<br><br></p>
                    </div>
                </div>
            </li>
            <li><a href="#openModal4">Electronics Recycle</a><br>

                <div id="openModal4" class="modalDialog4">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Electronics Recycle</h2>
                        <p>
                             <ul class ="a">
                            <li>Cameras (digital and non-digital), and Video cameras</li>
                            <li>CD players/recorders and MP3/Digital audio players</li>
                            <li>Cellular phones, Smart phones, and Telephones</li>
                            <li>Computer Components</li>
                            <ol>
                                <li>Laptops, Key boars, and Monitors</li>
                                <li>Mouse, Disc drives and Webcams</li>
                                <li>External hard drives, and Terminals</li>
                                <li>Printers, and Projectors (video, audio, image</li>
                            </ol>
                            <li>Digital picture frames, and Photocopiers</li>
                            <li>Dishwashers, Stoves, and Vacuum Cleaners</li>
                            <li>DVD/Blu-ray players, and VCRs</li>
                            <li>Fax machines, and Typewriters (electric)</li>
                            <li>Home theatre,Radios, Scanners and Televisions </li>
                            <li>Modems (wireless and wired)</li>
                            <li>Pagers and PDA (cell enabled),and Portable audio/video players</li>
                            <li>Tablet PCs</li>
                        </p>
                    </div>
                </div>
            </li>
            <li><a href="#openModal5">Food Waste</a><br>
                <div id="openModal5" class="modalDialog5">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Food Waste</h2>     <!--text altered 12/06/18 ariel -->
                        <p> By weight, food waste is the largest waste item in American landfills.<br><br>
                            The time taken for food waste to decompose depends on the type of food.<br><br>
                            Normally, an orange peel takes 6 months but an apple core or a banana peel takes around one month to decompose. <br><br></p>
                    </div>
                </div>
            </li>
            <li><a href="#openModal6">Glass</a><br>
                <div id="openModal6" class="modalDialog6">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Glass</h2> <!--text altered 12/06/18 ariel -->
                        <p>According to some sources, glass does not decompose at all.<br><br>
                            Normally glass is very easy to recycle mainly for the fact that glass is made of sand. <br><br>
                            Simply breaking down glass and melting it, we can produce new glass. But the shocking fact is that if glass is thrown away in
                            landfills, it takes million of years to decompose. <br><br>
                               </p>
                    </div>
                </div>
            </li>
            <li><a href="#openModal7">Paper</a><br>
                <div id="openModal7" class="modalDialog7">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Plastic Waste</h2> <!--text altered 12/06/18 ariel -->
                        <p>Normally, plastic items can take up to 1000 years to decompose in landfills.<br><br>
                            Plastic products are very common in our modern life.<br><br>
                            According to a recent estimate, every year we use approximately 1.6 million barrels of oil just for producing plastic water bottles.</br><br>
                            Plastic waste is one of many types of wastes that takes copious amounts of time to decompose.<br> <br></p>
                    </div>
                </div>
            </li>
            <li><a href="#openModal8">Plastic Waste</a><br>
                <div id="openModal8" class="modalDialog8">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Paper Waste</h2> <!--text altered 12/06/18 ariel -->
                        <p> Normally, it takes 2-6 weeks for landfills to completely decompose.<br><br>
                            Based on volume, paper is the largest element in American landfills.<br><br>
                            But if we recycle paper items, we can easily save a lot of landfill space, while reducing the energy and virgin material
                            requirements of making non-recycled paper.<br><br></p>
                    </div>
                </div>
            </li>
            <li><a href="#openModal9">Other Items</a><br>
                <div id="openModal9" class="modalDialog9">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Other Items</h2>
                        <p>
                            <ul class ="a">
                            <li> weeks to 1 year
                                <ol>
                                    <li>Train tickets, Cotton Glove, and Waxed milk carton</li>
                                    <li>Cardboard, Canvas products, and Ropes</li>
                                </ol>
                            </li>
                            <li>  1 year to 15 years
                                <ol>
                                    <li>Wool Clothing, Milk Cartons, and Plywood</li>
                                    <li>Painted board, Cigarette Butts, and Lumber- 10-15 years</li>
                                </ol>
                            </li>
                            <li>  16 years to 50 years
                                <ol>
                                    <li>Rubber-Boot Sole, Foamed Plastic Cups, and Leather shoes</li>
                                    <li>Nylon Fabric, and Tin can</li>
                                </ol>
                            </li>
                            <li>  More than 100 years
                                <ol>
                                    <li>Batteries, Monofilament Fishing Line, and Sanitary Pads </li>
                                </ol>
                            </li>
                            <li> Non-biodegradable <!--text altered 12/06/18 ariel -->
                                <ol>
                                <li>Styrofoam, and Tinfoil</li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
</body>
</html>
