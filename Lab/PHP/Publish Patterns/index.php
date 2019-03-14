<?php
/**
 * Created by PhpStorm.
 * User: Tech
 * Date: 2019-03-14
 * Time: 2:22 PM
 */

require_once 'component.php';
require_once 'dispatcher.php';

$componentA = new Component('Component A');
$dispatcher = Dispatcher::getInstance();

$componentB = new Component('Component B');
$dispatcher = Dispatcher::Subscribe($componentA, $componentA);

$componentC = new Component('Component C');
$dispatcher = Dispatcher::Subscribe($componentA, $componentC);