<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<?php
include_once 'Function.inc.php';

$arrayToList = read_Contacts();
?>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="col-md-4">
            <form action="create.php" method="post">
                <input style="color: #0f0f0f" placeholder="Search contact" name="Search" type="text" required>
                <input type="submit" class="btn btn-default" name="btnSearch" value="Search">
            </form>
        </div>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Add Contact</a></li>
                <li><a href="#">List Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Firstname</th>
                <th>Lastname</th>

            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($arrayToList as $val=>$item){


                        echo "<tr>";
                        echo "<td>" . $arrayToList[$val]['Title'] . "</td>";
                        echo "<td>" . $arrayToList[$val]['FirstName'] . "</td>";
                        echo "<td>" . $arrayToList[$val]['lastName'] . "</td>";
                        echo "<td> <a href='editContact.php?prKey=$val'> Modify </a></td>";
                        echo "<td><button class=\"btn btn-danger\" onclick=\".delete_Contact($val).\"><span
                                                class=\"glyphicon glyphicon-remove\"></span></button>";
                             
                        echo "</tr>";

            }
            ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
<a href="/folder_view/vs.php?s=php echo _FILE_?>" target="_blank "> View Source</a>