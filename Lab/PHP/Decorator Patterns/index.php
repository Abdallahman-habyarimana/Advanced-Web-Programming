<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 3/13/2019
 * Time: 9:14 PM
 */

include_once('html.php');
include_once('json.php');

$book = new stdClass();
$book->title = "Pattern of Enterprise";
$book->author = "Abdallah";
$book->author_last_name = "Mazimpaka";

echo '<h1>HTML Decorator </h1>';

$htmlDecorator = new HTMLDecorator($book);
$htmlDecorator->render();

echo '<h1>JSON Decorator </h1>';

$jsonDecorator = new JSONDecorator($book);
$jsonDecorator->render();