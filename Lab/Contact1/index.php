<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Welcome to My Page</title>
</head>
<body>
<div id="wrapper">

    <form name="login-form" class="contact-form" action="create.php" method="post">
        <input type="search" name="Search" placeholder="Search Contants">
        <div class="header">
            <h1>CONTACT</h1>
        </div>

        <div class="content">
            <table>
                <tr>
                    <td>
                        <input type="text" name="firstName" class="input-large" placeholder="First Name" >
                        <div class="user-icon"></div>
                    </td>
                    <td>
                        <input type="text" name="lastName" class="input-large" placeholder="Last Name" >
                        <div class="user-icon"></div>
                    </td>
                </tr>
        <div class="footer">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="btnSubmit" value="Add Contact" class="button" />
                    </td>
                    <td>
                        <input type="submit" name="btnList" value="List Contact" class="button" />
                    </td>
                </tr>
            </table>
            <input type="hidden" name="primaryKey"> <br/>

        </div>

    </form>

</div>
<div class="gradient"></div>
</body>
</html>
