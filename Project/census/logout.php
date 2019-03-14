<?php
session_start();
if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']==true){
unset($_SESSION['logged-in']);
session_destroy();
echo'<a href="index.php"></a>';
}
else{
echo 'You cannot logout while your not logged-in';
echo '<a href="index.php"></a>';
}
?>