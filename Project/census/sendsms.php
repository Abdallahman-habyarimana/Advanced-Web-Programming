<?php
/*
*@param host e.g localhost 0r 192.168.0.1
*@param port e.g 8800
*@param username e.g admin
*@param password e.g admin
*@param phoneNo on or more (comma delimited) e.g +256782247657,+256782xxxxxx
*@param $msgText e.g fix bug on atm
*/
function SendSMS ($host, $port, $username, $password, $phoneNoRecip, $msgText) {

$fp = fsockopen($host, $port, $errno, $errstr);
if (!$fp) {
echo "errno: $errno \n";
echo "errstr: $errstr\n";
return $result;
}
fwrite($fp, "GET /?Phone=" . rawurlencode($phoneNoRecip) . "&Text=" .
rawurlencode($msgText) . " HTTP/1.0\n");
if ($username != "") {
$auth = $username . ":" . $password;
$auth = base64_encode($auth);
fwrite($fp, "Authorization: Basic " . $auth . "\n");
}
fwrite($fp, "\n");
$res = "";
while(!feof($fp)) {
$res .= fread($fp,1);
}
fclose($fp);
return $res;
}
 
//$x = SendSMS("localhost", 8800, "user", "pass", "0783613493", "Test Message");
//echo $x;

?>
