<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/4/2018
 * Time: 12:57 AM
 */
class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name(){
        return $this->brand. " ". $this->model. " ". $this->year. "<br />";
    }
    function weight_lbs() {
       return floatval($this->weight_kg) * 2.2046226218;
    }
    function set_weight_lbs($value){
        $this->weight_kg =floatval($value) / 2.2046226218;
    }
}

$bicycle1 = new Bicycle();
$bicycle1->brand = 'Igare';
$bicycle1->model = 'Mk';
$bicycle1->year ='2012';
$bicycle1->weight_kg = 20;

echo $bicycle1->name()."<br />";
echo $bicycle1->weight_lbs()." lbl <br />";
echo $bicycle1->set_weight_lbs()." Kg<br />";