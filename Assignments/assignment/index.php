<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="javascript">

        function show(){
            document.location.href ="http://www.http://f7087205.gblearn.com/comp1230/assignments/";
        }
    </script>
<?php

include_once 'Function.inc.php';

if(isset($_POST['btnSubmit'])) {
    $pKey = getID();

    $fName = $_POST['firstName'] ;
    $lName = $_POST['lastName'];
    $title = $_POST['title'];
    $eMail = isset($_POST['eMail']) ? $_POST['eMail']: "No Email";
    $homePhone = isset($_POST['homeNumber']) ? $_POST['homeNumber'] : "0 ";
    $cellPhone = isset($_POST['cellularNumber'])? $_POST['homeNumber'] : "0 ";
    $officePhone = isset($_POST['officeNumber'])? $_POST['homeNumber'] : "0 ";
    $twitterUrl = isset($_POST['twitterUrl'])? $_POST['twitterUrl'] : "N/A";
    $facebookUrl = isset($_POST['facebookUrl'])? $_POST['facebookUrl'] : "N/A ";
    $comment = isset($_POST['commentContact'])? $_POST['commentContact'] : "N/A";
    // $facebookUrl = isset($_POST['facebookUrl'])? $_POST['facebookUrl'] : "N/A ";


    // insert all the information in an array

    $contact_to_create['primaryKey']=$pKey;
    $contact_to_create['FirstName'] = $fName;
    $contact_to_create['lastName'] = $lName;
    $contact_to_create['Title'] = $title;
    $contact_to_create['Email'] = $eMail;
    $contact_to_create['cellularPhone'] = $cellPhone;
    $contact_to_create['homePhone'] = $homePhone;
    $contact_to_create['officePhone'] = $officePhone;
    $contact_to_create['twitterUrl'] = $twitterUrl;
    $contact_to_create['facebookUrl'] = $facebookUrl;
    $contact_to_create['comment'] = $comment;

    // call the function get_Contact in function file to json_encoder
    get_Contact($contact_to_create);
    ?>
    <script type="text/javascript">
        window.location.href = 'http://f7087205.gblearn.com/comp1230/assignments/';
    </script>
    <?php
    exit();
}

?>
</head>
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
                <li class="active"><a href="#">Add Contact</a></li>
                <li><a href="ListContact.php">List Contact</a></li>
                <li> </li>
                <li> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Add</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <div class="panel-body">

                <form action="" METHOD="post" enctype="multipart/form-data">

                        <div class="col-md-6 form-group">
                            <label>Title</label>
                            <select class="form-control" id="title" name="title" required>
                                <option>Mr</option>
                                <option>Mrs</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>First name</label>
                            <input class="form-control" name="firstName"  required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last name</label>
                            <input class="form-control" name="lastName" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" name="eMail" type="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Cell number</label>
                            <input class="form-control" name="cellNumber" type="tel" >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Home number</label>
                            <input class="form-control" name="homeNumber" type="tel">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Office number</label>
                            <input class="form-control" name="officeNumber">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Twitter url</label>
                            <input class="form-control" type="url" name="twitterUrl">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Facebook url</label>
                            <input class="form-control" type="url" name="facebookUrl">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Picture</label>
                            <input class="form-control" type="file" name="imgContact" style="padding-bottom: 40px;" >
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Comment</label>
                            <input class="form-control"  name="commentContact" >
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                        <input type="submit" name="btnSubmit" value="Add Contact" class="btn btn-success" />
                        <a href="ListContact.php"> <input type="button"name="btnList"value="List Contact"class="btn btn-success"/>
                    </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
<a href="/folder_view/vs.php?s=php echo __FILE__?>" target="_blank "> View Source</a>