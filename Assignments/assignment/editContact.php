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

require 'Function.inc.php';


if(isset($_GET['prKey']))
{
    $pKey=$_GET['prKey'];
    $contact= read_Contacts();
}

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
                <li><a href="ListContact.php">List Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <div class="panel-body">
                <?php
                foreach ($contact as $row => $line) {
                if ($row == $pKey){

                ?>

                <form action="" METHOD="post">
                    <div class="col-md-6 form-group">
                        <select class="form-control" id="title" name="title" placeholder="<?php echo $line['title']; ?>" required>
                            <option>Mr</option>
                            <option>Mrs</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="form-control" type="hidden" id="example-text-input" name="primKey" value="<?php echo $pKey;?>" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <input class="form-control" type="hidden" id="example-text-input" name="primaryKey" value="<?php echo $line['primaryKey'];?>" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="First Name" >FirstName </label>
                        <input class="form-control" type="text" id="example-text-input" name="firstName" value="<?php echo $line['FirstName'];?>" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="Last Name" >Last Name </label>
                        <input class="form-control" type="text" id="focusedInput" name="lastName" value="<?php echo $line['lastName'];?>" required>
                </div>
                <br/><br/>
                <div class="col-md-6 form-group">
                        <label  for="email">Email:</label>

                        <input id="email" type="text" class="form-control" name="eMail" placeholder="Email" value="<?php echo $line['Email'];?>">
                    </div>
                    <br/>
                    <div class="col-md-6 form-group">
                        <label for="First Name" > Cellular Phone </label>
                        <input class="form-control" type="text" id="example-text-input" name="cellularPhone" value="<?php echo $line['cellularPhone'];?>" >
                    </div>
                    <br/><br/>
                    <div class="col-md-6 form-group">
                        <label for="Home Phone" >Home Phone </label>
                        <input class="form-control" type="text" id="example-text-input" name="homePhone" value="<?php echo $line['homePhone'];?>" >
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="Office Name" >Office Phone </label>
                        <input class="form-control" type="text" id="example-text-input" name="officePhone" value="<?php echo $line['officePhone'];?>">
                    </div>
                    <br/><br/>
                    <div class="col-md-6 form-group">
                        <label for="Twitter Account" >Twitter Account </label>
                        <input class="form-control" type="text" id="example-text-input" name="twitterURL"value="<?php echo $line['twitterUrl'];?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="facebook Account" >Facebook Account </label>
                        <input class="form-control" type="text" id="example-text-input" name="facebookUrl" value="<?php echo $line['facebookUrl'];?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="submit" name="btnSave" value="Save" class="btn btn-info" />
                    </div>
                    <div class="col-md-6 form-group">
                        <a href="ListContact.php"> <input type="button"name="btnList"value="List Contact"class="btn btn-info"/>
                    </div>
                    <!-- <div class="col-md-6 form-group">
                        <label>Picture</label>
                        <input class="form-control" type="file" name="imgContact" style="padding-bottom: 40px;" value="<?php echo $line['facebookUrl'];?>">
                    </div> -->
                    <div class="col-md-12 form-group">
                        <label>Comment</label>
                        <input class="form-control"  name="commentContact" value="<?php echo $line['comment'];?>" >
                    </div>

            </div>
            <?php
            }

            }?>

        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
<a href="/folder_view/vs.php?s=php echo __FILE__?>" target="_blank "> View Source</a>