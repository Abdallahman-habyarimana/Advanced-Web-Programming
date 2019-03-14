<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 10/8/2017
 * Time: 11:11 AM
 */
define('FILE_NAME','textToContact.txt');
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

function add_Contact($line)
    {
        $myFiles = fopen(FILE_NAME,'a');
        fwrite($myFiles,$line."\n");
        fclose($myFiles);
    }
function update_Contact($line)
{
    $contents = file_get_contents('example.json');

//Decode the JSON data into a PHP array.
    $contentsDecoded = json_decode($contents, true);

//Modify the counter variable.
    $contentsDecoded['counter']++;

//Encode the array back into a JSON string.
    $json = json_encode($contentsDecoded);

//Save the file.
    file_put_contents('example.json', $json);
}
function read_Contacts()
   {
       $myFilesToRead = fopen(FILE_NAME,'r+');
       while(! feof(FILE_NAME))
       $str[]= fread($myFilesToRead,filesize(FILE_NAME));

       fclose($myFilesToRead);
      $createContact = json_decode($str,true);
       return $createContact;
   }
function get_Contact($line){
    $str = file_get_contents(FILE_NAME);
    $createContact = json_decode($str,true);
    $createContact []= $line;
    $arrayToInsert = json_encode($createContact);
    return add_Contact($arrayToInsert);
}
function search_Contact(){
    $str = read_Contacts();
    return $str;
}
function modify_Contact()
{
$str = read_Contact();
return $str;
}