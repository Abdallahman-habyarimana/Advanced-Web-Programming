
<?php

include_once 'Function.inc.php';
define('FILE_NAME','listContact.txt');
$mode='w';
if(file_exists(FILE_NAME)){
    $mode='a';
}

if(isset($_POST['btnSubmit'])) {
    $pKey = getID();
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
     
    $files_Handle = fopen(FILE_NAME, $mode);
    fwrite($files_Handle, $pKey);
    fwrite($files_Handle, $fName);
    fwrite($files_Handle, $lName. PHP_EOL);
    fclose($files_handle);
    header('location:index.php');
    exit;
}
if(isset($_POST['btnList'])) {
    $files_Handle = fopen('listContact.txt', 'r');
    $Theinfo = fgets($files_Handle);
    fclose($files_Handle);
    echo $Theinfo;
}

/*
 *
 * $new_csv =fopen('report.csv','w');
 * fputcsv($new_csv,$row*;
 * fclose($new_csv);
 *
 * header("contnt-type:text/csv);
 * header("content-dispostion:attachment;filename=report.csv"); */
