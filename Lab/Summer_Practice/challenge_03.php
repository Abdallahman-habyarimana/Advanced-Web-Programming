<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/5/2018
 * Time: 10:47 AM
 */
class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description;
    private $weight_kg = 0.0;
    protected $wheels = 2;

    public function name(){
        return $this->brand. " ". $this->model. " ". $this->year. "<br />";
    }
    public function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218 ." lbs <br />";
    }
    public function set_weight_lbs($value){
        $this->weight_kg =floatval($value) / 2.2046226218;
    }
    public function wheel_details(){
        $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
        return 'It has'.$wheel_string .'.<br />';
    }

    public function set_weight_kg($value){
        $this->weight_kg =floatval($value);
    }

    public function weight_kg(){
        return $this->weight_kg." kg";
    }
}

class Unicycle extends Bicycle{
    protected $wheels = 1;
}
$bicycle1 = new Bicycle();
$bicycle1->brand = 'Igare';
$bicycle1->model = 'Mk';
$bicycle1->year ='2012';

$uni = new Unicycle();

$bicycle1->set_weight_kg(20);
echo $bicycle1->name()."<br />";
$bicycle1->set_weight_lbs(20);
echo $bicycle1->weight_lbs()." lbl <br />";
echo $bicycle1->weight_kg();


$uni->set_weight_kg(40);
echo $uni->name()."<br />";
echo $uni->weight_lbs()." lbl <br />";
echo $uni->set_weight_lbs(20)." Kg<br />";