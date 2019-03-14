
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                       </div>
                    <div class="col-md-2">
                        <a class="btn btn-success pull-right" href="index.php"><span
                                class="glyphicon glyphicon-plus"> New Contact</span> </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-success pull-right" href="listContact.php"><span
                                class="glyphicon glyphicon-plus"> All Contact</span> </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script>
    function deleteContact(param) {
        if (confirm("Are you sure to delete this contact?") == true) {
            location.href='delete.php?id='+param;
        }
    }
</script>
</body>
</html>
