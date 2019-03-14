<?php
include "functions.php";
include "Constants.php";
if (isset($_GET[id])){
    deleteContact(FILE_NAME,intval($_GET['id']));
    header('location: index.php');
    exit;
}