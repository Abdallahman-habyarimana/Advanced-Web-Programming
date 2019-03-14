<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 10/8/2017
 * Time: 11:11 AM
 */

function getID(){
    $file_name ='ids';
    if(!file_exists($file_name)){
      touch($file_name);
      $handle = fopen($file_name,'r+');
      $id=0;
    }
    else {
        $handle = fopen($file_name, 'r+');
        $id = fread($handle, filesize($file_name));
        settype($id, "integer");
    }
    rewind($handle);
    fwrite($handle,++$id);
    fclose($handle);
    return $id;
    }

    function read_ContactCsv($file_Name){
     $rows = array();
     foreach(file($file_Name, FILE_IGNORE_NEW_LINES) as $line)
     {
         $rows[] = str_getcsv($line);
     }
     return $rows;
    }

    function write_ContactCsv($fileName, $rows){

    }
function getForm($arrayForm, $idArray){
    $arrayNew[$idArray]=$arrayForm;
}
/*$arrayList=getForm();
function printList($arrayList)
{
    for ($i = 1; $i < count($arrayList); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($arrayList[$i]); $j++)
            echo '<td>' . $arrayList[i][j] . '<a href="">Delete</a>' . '<a href="">Modify</a>' . '</td>';
        echo '</tr>';
    }
}*/