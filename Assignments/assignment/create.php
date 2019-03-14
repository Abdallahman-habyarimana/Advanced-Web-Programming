<?php

include_once 'Function.inc.php';

if(isset($_POST['btnSave'])) {
    $idNumber = $_POST['primKey'];
    $pKey = $_POST['primaryKey']; // get Primary Key
    $fName = isset($_POST['firstName']) ? $_POST['firstName']: "";
    $lName = isset($_POST['lastName']) ? $_POST['lastName']: "";
    $title = isset($_POST['title'])? $_POST['title']: " ";
    $eMail = isset($_POST['eMail']) ? $_POST['eMail']: "No Email";
    $homePhone = isset($_POST['homePhone']) ? $_POST['homePhone'] : "0";
    $cellPhone = isset($_POST['cellularPhone'])? $_POST['homePhone'] : "0 ";
    $officePhone = isset($_POST['officePhone'])? $_POST['homePhone'] : "0 ";
    $twitterUrl = isset($_POST['twitterUrl'])? $_POST['twitterUrl'] : "N/A";
    $facebookUrl = isset($_POST['facebookUrl'])? $_POST['facebookUrl'] : "N/A ";
    $comment = isset($_POST['commentContact'])? $_POST['commentContact'] : "N/A";
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

    modify_Contact($contact_to_create, $idNumber);
    ?>
    <script type="text/javascript">
    window.location.href = 'http://f7087205.gblearn.com/comp1230/assignments/listContact.php';
    </script>
    <?php

    exit();
}
if(isset($_POST['btnSearch'])) {
    $search = $_POST['Search'];
    $arrayContact = read_Contacts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                <li><a href="ListContact.php">List Contact</a></li>
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
            foreach($arrayContact as $key=>$row) {
                if ((($arrayContact[$key]['FirstName'] == $search)&& ($arrayContact[$key]['lastName'] == $search))
                    || ($arrayContact[$key]['FirstName'] == $search)
                    || $arrayContact[$key]['lastName'] == $search ){
                    echo "<tr>";

                        echo "<td>" . $arrayContact[$key]['FirstName'] . "</td>";
                    echo "<td>" . $arrayContact[$key]['lastName'] . "</td>";
                    echo "<td>" . $arrayContact[$key]['lastName'] . "</td>";
                    echo "<td> <a href=''?prKey=$key> Modify </a></td>";
                    echo "<td> <a href=''> Delete </a></td>";


                   }
            }
            echo "</tr>";

            ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
<?php
}
?>
<a href="/folder_view/vs.php?s=php echo __FILE__?>" target="_blank "> View Source</a>