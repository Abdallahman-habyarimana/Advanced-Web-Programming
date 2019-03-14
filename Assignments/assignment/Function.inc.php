<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 10/8/2017
 * Time: 11:11 AM
 */
define('FILE_NAME','contact.txt');

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

function add_Contact($arrayToConvert)
    {
        $myFile = fopen(FILE_NAME, 'a');
        if (filesize(FILE_NAME) == 0) {
            fwrite($myFile, $arrayToConvert."\n");
            fclose($myFile);
            return true;

        }
        else{

                fwrite($myFile, $arrayToConvert."\n");
                fclose($myFile);
                return true;

            }
        return false;
    }
function read_Contacts()
{
    $handle = fopen(FILE_NAME, 'r+');
    while (!feof($handle))
        $contacts[] = json_decode(fgets($handle), true);
    fclose($handle);
    return $contacts;
}
// This function read all the line in the file and return the file handler
function read_My_File(){
       $handle = fopen(FILE_NAME, 'r+');
       while(!feof($handle)) {
           $content = fread($handle, filesize(FILE_NAME));
       }
       fclose($handle);
       return $content;
   }

   // This function use Json_encode to encode the array and returned to add contact
function write_To_Contacts($contacts)
{
    return add_Contact(json_encode($contacts));
}
// Hellp to get the data
function get_Contact($contactArray){

    $contacts = $contactArray;
    write_To_Contacts($contacts);
}

//Return the array to search value on it
function search_Contact(){
    $str = read_Contacts();
    return $str;
}
// This function Modify the record
function modify_Contact($arrayToModify, $id)
{

    $array = ['primaryKey' => null,'Title' => null,'FirstName' => null,'lastName' => null,'Email'=> null,
         'cellularPhone' => null, 'homePhone'=>null, 'officePhone' => null,
        'twitterUrl' => null,'facebookUrl' => null, 'comment'=> null];
$str = read_Contacts();
    foreach ($str as $val=>$item){
        if($val == $id)
          $str[$id]= $array;
        }
        $str[$id]=$arrayToModify;

return get_Contact($str);
}

// This function delete the record
function delete_Contact($id)
{
    $contacts = read_Contacts();
    unset($contacts[$id]);
    return write_To_Contacts($contacts);
}
?>
<a href="/folder_view/vs.php?s=php echo __FILE__?>" target="_blank "> View Source</a>
