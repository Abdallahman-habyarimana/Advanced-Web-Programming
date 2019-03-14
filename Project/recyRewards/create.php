<?php
session_start();
include 'functions.php';
include 'db_connect.php';
//include 'validation.js';
if(isset($_POST['Register'])) {
    if ($_POST['type'] == "School") {
        $type = $_POST['type'];
        $id_school = getID();
        $school_Name = $_POST['schoolName'];
        $school_Contact = $_POST['schoolContact'];
        $rNumber = $_POST['numberOfRoom'];
        $cellPhone = $_POST['cellNumber'];
        $eMail = $_POST['eMail'];
        $province = $_POST['Province'];
        $city = $_POST['City'];
        $address = $_POST['Address'];
        $postal_Code = $_POST['Postal_Code'];
        $Password = $_POST['new_Password'];
        $pKey = insertIntoTables($type, $eMail, $address, $cellPhone, $school_Name, $school_Contact, $rNumber, $province, $city, $postal_Code, $Password);
        if (isset($pKey)) {
            $message = "Your User Name is :" . $pKey;
            echo "<script> alert('$message'); </script>";
            echo "<script> window.location.href = 'register.php' ; </script>";
        }
    }
  else {
        $type = $_POST['type'];
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $cellPhone = $_POST['cellNumber'];
        $eMail = $_POST['eMail'];
        $province = $_POST['Province'];
        $city = $_POST['City'];
        $address = $_POST['Address'];
        $postal_Code = $_POST['Postal_Code'];
        $Password = $_POST['new_Password'];
        $pKey = insert_Into_Individual_Tables($type, $fName, $lName, $eMail, $address, $cellPhone, $province, $city, $postal_Code, $Password);
         if (isset($pKey)) {
          $message = "Your User Name is :" . $pKey;
          echo "<script> alert('$message'); </script>";
          echo "<script> window.location.href = 'register.php' ; </script>";
         }
    }//
}
if(isset($_POST['Login'])) {

    $eMl = $_POST['userName'];
    $password = $_POST['new_Password'];
    $pwd = strip_tags($password);
    $str = encrypt_password($pwd);
    $eml = strip_tags($eMl);
    $con = db_Connect();
    $query = "select * from `user_table` where user_id='$eml' and user_Password ='$str'";
    $result=mysqli_query($con, $query) or die("MySQL error: " . mysqli_error($con) . "<hr>\nQuery: $query");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['logged-in']=true;
        $_SESSION['user_Id'] = $row['user_Id'];
        $_SESSION['Address'] =$row['user_Address'];
        $_SESSION['Postal_Code'] =$row['user_PostalCode'];
        // Initializing Session
        echo "<script> window.location.href = 'user_index.php' ; </script>";
    } else {
        $error = "Incorrect username or password.";
    }
}
if((isset($_POST['get_Point']))) { // check whether the button send are clicked
    $quality = $_POST['type'];
    $nofBags = $_POST['nBags'];
    if($quality == "Small")
          $points = 5 * $nofBags;
    else
           $points = 10 * $nofBags;
    insert_Into_point_table($nofBags,$points);
    $message = "Congratulations user :" . $_POST['user_Id'];
    echo "<script> alert('$message'); </script>";
    echo "<script> window.location.href = 'scanCode.php' ; </script>";
}