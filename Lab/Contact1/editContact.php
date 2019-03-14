<?php
include 'functions.php';
include 'Constants.php';
exec('whoami');
if(isset($_GET['id']))
{
    $id=intval($_GET['id']);
   $contact= getContact(FILE_NAME,$id);
}
else
{
    $contact=new ContactInformation();
}
if (isset($_POST['submitForm']))
{
    echo $_POST['idInput'];

    if (isset($_POST['idInput']) && strlen($_POST['idInput'])>0)         //update existing object
    {

        $id=intval($_POST['idInput']);
        $contact->title=$_POST['titleInput'];
        $contact->firstname=$_POST['firstnameInput'];
        $contact->lastname=$_POST['lastnameInput'];
        $contact->email=$_POST['emailInput'];
        $contact->site=$_POST['siteInput'];
        $contact->cellNumber=$_POST['cellNumberInput'];
        $contact->homeNumber=$_POST['homeNumberInput'];
        $contact->officeNumber=$_POST['officeNumberInput'];
        $contact->twitterUrl=$_POST['twitterUrlInput'];
        $contact->facebookUrl=$_POST['facebookUrlInput'];
        $contact->comment=$_POST['CommentInput'];
        if(isset($_FILES['picturlInput']))
        {
            $path = 'files/' . $_FILES['picturlInput']['name'];
            if(!file_exists($path))
            {
                move_uploaded_file($_FILES['picturlInput']['tmp_name'],$path);
            }
            $contact->picture=$path;
        }
        editContact(FILE_NAME,$id,$contact);
    }
    else{                   //add new object
        $contact->title=$_POST['titleInput'];
        $contact->firstname=$_POST['firstnameInput'];
        $contact->lastname=$_POST['lastnameInput'];
        $contact->email=$_POST['emailInput'];
        $contact->site=$_POST['siteInput'];
        $contact->cellNumber=$_POST['cellNumberInput'];
        $contact->homeNumber=$_POST['homeNumberInput'];
        $contact->officeNumber=$_POST['officeNumberInput'];
        $contact->twitterUrl=$_POST['twitterUrlInput'];
        $contact->facebookUrl=$_POST['facebookUrlInput'];
        $contact->comment=$_POST['CommentInput'];
        if(isset($_FILES['picturlInput']))
        {
            $path = 'files/' . $_FILES['picturlInput']['name'];
            if(!file_exists($path))
            {
                move_uploaded_file($_FILES['picturlInput']['tmp_name'],$path);
            }
            $contact->picture=$path;
        }
        addContact(FILE_NAME,$contact);
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit contact</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3>Edit Contact information</h3>

            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="col-md-6 form-group">
                        <label>Title</label>
                        <input class="form-control" name="titleInput" value="<? echo $contact->title?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>First name</label>
                        <input class="form-control" name="firstnameInput" value="<? echo $contact->firstname?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Last name</label>
                        <input class="form-control" name="lastnameInput" value="<? echo $contact->lastname?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input class="form-control" name="emailInput" type="email" value="<? echo $contact->email?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Site</label>
                        <input class="form-control" type="url" name="siteInput" value="<? echo $contact->site?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Cell number</label>
                        <input class="form-control" name="cellNumberInput" type="tel" value="<? echo $contact->cellNumber?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Home number</label>
                        <input class="form-control" name="homeNumberInput" type="tel" value="<? echo $contact->homeNumber?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Office number</label>
                        <input class="form-control" name="officeNumberInput" value="<? echo $contact->officeNumber?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Twitter url</label>
                        <input class="form-control" type="url" name="twitterUrlInput" value="<? echo $contact->twitterUrl?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Facebook url</label>
                        <input class="form-control" type="url" name="facebookUrlInput" value="<? echo $contact->facebookUrl?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Picture</label>
                        <input class="form-control" type="file" name="picturlInput" style="padding-bottom: 40px;" value="<? echo $contact->picture?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Comment</label>
                        <input class="form-control"  name="CommentInput" value="<? echo $contact->comment?>">
                    </div>

                    <input type="hidden" name="idInput" value="<?php if(isset($id)){ echo $id;}?>">
                    <div class="col-md-3 col-md-offset-4">
                        <input type="submit" class="btn btn-success" name="submitForm" value="Save">
                        <input type="reset" class="btn btn-danger" value="Clear">
                        <a href="index.php" class="btn btn-default">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>

</body>
</html>
