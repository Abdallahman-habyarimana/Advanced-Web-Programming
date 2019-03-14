<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/9/2018
 * Time: 12:45 AM
 */

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    private $weight_kg = 0.0;
    protected static  $wheels = 2;
    public static $instance_count = 0;
    public $category;
    public const CAT = ["Road", "Mountain", "Hybrid", "Cruiser", "City", "BMX"];

    public function name(){
        return $this->brand. " ". $this->model. " ". $this->year. "<br />";
    }
    public function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218 ." lbs <br />";
    }
    public function set_weight_lbs($value){
        $this->weight_kg =floatval($value) / 2.2046226218;
    }
    public static function wheel_details(){
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels."wheels";
        return 'It has'.$wheel_string .'.<br />';
    }

    public function set_weight_kg($value){
        $this->weight_kg =floatval($value);
    }

    public function weight_kg(){
        return $this->weight_kg." kg";
    }

    public static function create() {
        $class_name = get_called_class();
        $obj = new $class_name;
        //$obj = new static    // self & static work here too
        //$obj = new self
        self::$instance_count++;
        return $obj;
    }
}

class Unicycle extends Bicycle{
    protected static $wheels = 1;

    public static function create() {
        echo "Check this Number : .</br>";
        parent::$instance_count;
        echo "Bye .<br />";
    }

    public static function wheel_details() {

    }
}
$bicycle1 = new Bicycle();
$bicycle1->brand = 'Igare';
$bicycle1->model = 'Mk';
$bicycle1->year ='2012';

echo 'Bicycle count: '. Bicycle::$instance_count . '<br />';
echo 'Bicycle count: '. Unicycle::$instance_count . '<br />';

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bicycle count: '. Bicycle::$instance_count . '<br />';
echo 'Bicycle count: '. Unicycle::$instance_count . '<br />';

echo "<hr />";
echo 'Categories: '. implode(',', Bicycle::CAT).'<br />';
$bicycle1->category = Bicycle::CAT[0];
echo 'Category: '.$bicycle1->category .'<br />';

echo "<hr />";
