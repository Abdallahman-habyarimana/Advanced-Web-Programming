<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/9/2018
 * Time: 12:29 AM
 */
class Bicycle {
    protected static $wheels = 2;

    public static function wheel_details() {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels. " wheels";
        return "It has" .$wheel_string. ".";
    }

}

class Unicycle extends Bicycle {
    protected static $wheels = 1;
}

echo Bicycle::wheel_details() ."<br />";

echo Unicycle::wheel_details() ."<br />";