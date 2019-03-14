<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 3/13/2019
 * Time: 7:37 PM
 */

include_once 'user.php';

$user = new User();
$user -> load(1);

echo '<pre>';
print_r($user);

