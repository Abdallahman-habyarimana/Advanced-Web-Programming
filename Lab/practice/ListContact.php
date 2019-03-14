<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Welcome to My Page</title>
</head>
<body id="Container_body">
<div id="wrapper">
    <?php
    include_once 'Function.inc.php';
    $arrayToList = read_Contacts();

    ?>



    <input type="text" name="Search" placeholder="Search Contants">
        <input type="submit" name="btnSearch" value="Search" class="button" />
        <div class="header">
            <h1>CONTACT</h1>
        </div>

        <div class="content">
            <table>
                <tr>
                      <td> Title </td>
                      <td> Name    </td>
                      <td> Last Name </td>
                </tr>
                <?php
                foreach($arrayToList as $key=>$row) {
                    echo "<tr>";
                    foreach($row as $key2=>$row2){
                        echo "<td>" . $row2. "</td>";
                       }
                    echo "<td> <a href='editContact.php?prKey=$key'> Modify </a></td>";
                    echo "<td> <a href=''> Delete </a></td>";

                    echo "</tr>";
                }
                ?>
                 </table>

</div>
<div class="gradient"></div>

</body>
</html>
