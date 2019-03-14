<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/9/2018
 * Time: 12:36 AM
 */
class Sofa {
    protected static $identity = 'Sofa class';

    public static function identity_test() {
        echo 'self : ' . self::$identity . "<br />";
        echo 'static : ' . static::$identity . "<br />";

        echo 'get_class : '. get_class() . "<br />";
        echo 'get_called_class : '. get_called_class() . "<br />";
    }
}

class Loweseat extends Sofa {
    protected static $identity = 'Loweseat class';
}

Sofa::identity_test();
echo "<hr />";
Loweseat::identity_test();