<?php

include_once 'Function.inc.php';

if(isset($_POST['btnSubmit'])) {
    $pKey = getID(); // get Primary Key
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $title = $_POST['title'];
    $contact_to_create['primaryKey'] = $pKey;
    $contact_to_create['FirstName'] = $fName;
    $contact_to_create['lastName'] = $lName;
    $contact_to_create['Title'] = $title;
    get_Contact($contact_to_create);
    header('location:index.php');
    exit();
}
if(isset($_POST['btnModify'])) {
    $pKey = $_POST['primaryKey']; // get Primary Key
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $title = $_POST['title'];
    $contact_to_create['primaryKey'] = $pKey;
    $contact_to_create['FirstName'] = $fName;
    $contact_to_create['lastName'] = $lName;
    $contact_to_create['Title'] = $title;
    get_Contact($contact_to_create);
    header('location:index.php');
    exit();
}
if(isset($_POST['btnSearch'])) {
    $search = $_POST['Search'];
    $arrayContact = read_Contact();
echo "<table>";
                foreach($arrayContact as $key=>$row) {
                        if ((($row['FirstName'] == $search)&& ($row['lastName'] == $search))
                            || ($row['FirstName'] == $search)
                            || $row['lastName'] == $search ){
                            echo "<tr>";
                            echo "<td> Title </td>";
                            echo "<td> Name </td>";
                            echo "<td> Last Name</td>";
                            echo "</tr>";
                            echo "<tr>";
                            foreach ($row as $key2 => $row2) {
                            echo "<td>" . $row2 . "</td>";
                        }
                            echo "<td> <a href=''> Modify </a></td>";
                            echo "<td> <a href=''> Delete </a></td>";
                        }
                   }
                    echo "</tr>";
    echo "</table>";

}