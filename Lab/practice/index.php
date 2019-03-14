<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link typeof="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link typeof="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
    <title>Welcome to My Page</title>
</head>
<body>
<div class="panel-body">
   <?php include 'Function.inc.php';?>
    <form name="login-form" enctype="multipart/form-data" action="create.php" method="post">

        <div class="panel-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <div class="col-md-6 form-group">
                    <label>Title</label>
                    <input class="form-control" name="titleInput" value="" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>First name</label>
                    <input class="form-control" name="firstnameInput" value="" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Last name</label>
                    <input class="form-control" name="lastnameInput" value="" required>
                </div>
                <br/></br>
                <div class="col-md-6 form-group">
                    <label>Email</label>
                    <input class="form-control" name="emailInput" type="email" value="">
                </div>
                <div class="col-md-6 form-group">
                    <label>Site</label>
                    <input class="form-control" type="url" name="siteInput" value="">
                </div>
                <div class="col-md-6 form-group">
                    <label>Cell number</label>
                    <input class="form-control" name="cellNumberInput" type="tel" value="">
                </div>
                <div class="col-md-6 form-group">
                    <label>Home number</label>
                    <input class="form-control" name="homeNumberInput" type="tel" value="">
                </div>
                <div class="col-md-6 form-group">
                    <label>Office number</label>
                    <input class="form-control" name="officeNumberInput" value="">
                </div>
                <div class="col-md-6 form-group">
                    <label>Twitter url</label>
                    <input class="form-control" type="url" name="twitterUrlInput" value="">
                </div>
                <div class="col-md-6 form-group">
                    <label>Facebook url</label>
                    <input class="form-control" type="url" name="facebookUrlInput" value="">
                </div>
                <div class="col-md-6 form-group">
                    <label>Picture</label>
                    <input class="form-control" type="file" name="picturlInput" style="padding-bottom: 40px;" value="">
                </div>
                <div class="col-md-12 form-group">
                    <label>Comment</label>
                    <input class="form-control"  name="CommentInput" value="">
                </div>

                <div class="footer">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="btnSubmit" value="Add Contact" class="button" />
                    </td>


        </div>

    </form>
    <td>
      <a href="ListContact.php"> <input type="button"name="btnList"value="List Contact"class="button"/>
      </a></td>
    </tr>
    </table>
</div>
<div class="gradient"></div>
</body>
</html>
