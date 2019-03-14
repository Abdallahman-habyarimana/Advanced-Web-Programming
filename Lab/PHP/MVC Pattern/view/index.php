<?php
/**
 * Created by PhpStorm.
 * User: Tech
 * Date: 2019-03-14
 * Time: 3:04 PM
 */

include_once '../default_controller.php';
include_once '../greeting_controller.php';
include_once '../greeting.php';

$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$module = isset($_GET['m']) ? $_GET['m'] : 'index';

switch($module){
    case 'greeting':
        $controller = new GreetingController();
        break;
    default:
        $controller = new DefaultController();
}

$controller->run($action);
